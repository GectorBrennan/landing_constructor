@extends('layouts.landing')

@section('content')

    @php
        $routes = collect([
            'store' => route('landings.api.store'),
            'update' => route('landings.api.update'),
            'back' => route('landings.list')
        ])->toJson()
    @endphp

    <div id="app">
        <app :is-dev="true" :routes="{{$routes}}"></app>
    </div>

@endsection