@extends('layouts.landing')

@section('content')

@php
    $routes = collect([
        'show' => route('landings.show', ['landing' => $landing->id]),
        'update' => route('landings.api.update'),
        'back' => route('landings.list')
    ])->toJson()
@endphp

    <div id="app">
        <app :data="{{ collect($landing)->toJson()}}" :is-dev="true" :routes="{{$routes}}"></app>
    </div>

@endsection