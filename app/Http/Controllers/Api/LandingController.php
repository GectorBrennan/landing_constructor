<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\LandingService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LandingController extends Controller
{
    private $service;

    public function __construct(LandingService $service)
    {
        $this->service = $service;
    }

    public function store(Request $request)
    {
        $landing = $this->service->store($request);

        return response()->json(['landing' => $landing], 200);
    }

    public function update(Request $request)
    {
        $landing = $this->service->update($request);

        return response()->json(['landing' => $landing], 200);
    }
}
