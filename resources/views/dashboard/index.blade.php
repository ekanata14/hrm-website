@extends('dashboard.templates.main')

@section('container')
    <h1 class="h2">Your Dashboard, {{ auth()->user()->name }}</h1>
@endsection