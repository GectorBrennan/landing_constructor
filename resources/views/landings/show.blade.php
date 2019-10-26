@extends('layouts.landing')

@section('content')

    <div id="app">
        <app :data="{{ collect($landing)->toJson()}}"></app>
    </div>

@endsection
