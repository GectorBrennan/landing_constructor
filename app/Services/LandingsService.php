<?php

namespace App\Services;

use App\Enums\LandingStatus;
use App\Models\{
    ExpertLink, Landing, ProductLink
};
use Illuminate\Http\Request;

final class LandingsService
{
    const DEFAULT_PER_PAGE_ITEMS = 20;

    /** @var Landing $model */
    private $model;
    /**
     * @var BlocksService
     */
    private $blocksService;

    /**
     * @var ImagesService
     */
    private $imagesService;

    public function __construct(BlocksService $blocksService, ImagesService $imagesService)
    {
        $this->model = Landing::class;
        $this->blocksService = $blocksService;
        $this->imagesService = $imagesService;
    }

    public function getPagedLandings()
    {
        return $this->model::latest()->with('blocks')->paginate($this::DEFAULT_PER_PAGE_ITEMS);
    }

    public function store(Request $request): ?Landing
    {
        $landing = $this->model::create([
            'user_id' => $request->get('user_id'),
            'name' => $request->get('name'),
            'logo' => $request->get('logo'),
            'meta_title' => $request->get('meta_title'),
            'meta_description' => $request->get('meta_description'),
            'status' => LandingStatus::Unpublished
        ]);

        if ($request->has('blocks')) {
            $this->blocksService->store($request->get('blocks'), $landing->id);
        }

        return $landing;
    }

    public function update(Request $request, Landing $landing)
    {
        $update = $request->except(['id', 'user_id', 'created_at', 'updated_at', 'blocks']);

        $landing = $landing->update($update);

        if ($request->has('blocks')) {
            $this->blocksService->update($request->get('blocks'));
        }

        return $landing;
    }
}