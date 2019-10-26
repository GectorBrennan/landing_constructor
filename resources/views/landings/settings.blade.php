@extends('layouts.app')
@section('title')
    Настройка лендинга
@endsection
@section('content')

@php
    $routes = collect([
        'update' => route('landings.api.update'),
    ])->toJson()
@endphp

    <div id="app">
        <app :landing="{{ collect($landing)->except('blocks')->toJson()}}" :routes="{{$routes}}"></app>
    </div>

@endsection
@push('after_styles')
    <link rel="stylesheet" href="{{ asset('css/unused_styles/land-construct/land_settings/style.css') }}">
@endpush

@push('after_scripts')
    <script src="{{ mix('js/landing/vendor.js') }}"></script>
    <script src="{{ mix('js/landing/settings/app.js') }}"></script>
@endpush
