<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Landing;
use App\Services\LandingService;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class LandingController extends Controller
{
    private $service;

    public function __construct(LandingService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $landings = $this->service->index($request);

        return view('landings.list', compact('landings'));
    }

    public function create($type)
    {
        return view("landings.{$type}.index");
    }

    public function edit(Landing $landing)
    {
        if (is_null($landing)) {
            return redirect(route('landings.index'))->withErrors(['landing' => 'Лендинг не найден']);
        }
        $landing->load('blocks');

        return view('landings.edit', compact('landing'));
    }

    public function show(Landing $landing)
    {
        $landing->load('blocks');

        return view('landings.show', compact('landing'));
    }

    public function destroy(Landing $landing)
    {
        try {
            $landing->delete();
        } catch (Exception $exception) {
            return redirect()->back()->withErrors(['landing' => 'Не удалось удалить лендинг']);
        }

        return redirect()->back();
    }

    public function settings($id)
    {
        $landing = $this->service->show($id);

        if (is_null($landing)) {
            return redirect(route('landings.index'))->withErrors(['landing' => 'Лендинг не найден']);
        }

        return view('landings.settings', compact('landing'));
    }
}
