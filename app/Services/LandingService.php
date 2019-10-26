<?php

namespace App\Services;

use App\Models\Landing;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

final class LandingService
{
    const DEFAULT_PER_PAGE_ITEMS = 20;

    /** @var Landing $model */
    private $model;
    /**
     * @var BlocksService
     */
    private $blocksService;

    public function __construct(BlocksService $blocksService)
    {
        $this->model = Landing::class;
        $this->blocksService = $blocksService;
    }

    public function index(Request $request): ?LengthAwarePaginator
    {
        return $this->model::latest()->with('blocks')->paginate($this::DEFAULT_PER_PAGE_ITEMS);
    }

    public function store(Request $request)
    {
        $landing = $this->model::create([
            'name' => $request->get('name'),
            'logo' => $request->get('logo'),
            'meta_title' => $request->get('meta_title'),
            'meta_description' => $request->get('meta_description'),
        ]);

        if ($request->has('blocks')) {
            $this->blocksService->store($request->get('blocks'), $landing->id);
        }

        return $landing->load('blocks');
    }

    public function update(Request $request)
    {
        $landing = $this->model::find($request->get('id'));

        $update = $request->except(['id', 'created_at', 'updated_at', 'blocks']);
        $landing->update($update);

        if ($request->has('blocks')) {
            $this->blocksService->update($request->get('blocks'));
        }

        return $landing->fresh()->load('blocks');
    }

    public function destroy(int $id)
    {
        return $this->sdk->landing->delete($id);
    }
}