@extends('templates.main')

@section('container')
<div class="container mt-5 d-flex flex-column justify-content-around">
    <div class="row mb-3">
        <div class="col-lg-12">
        </div>
        <h1 class="text-center mb-3">{{ $event->title }}</h1>
        <img src="https://source.unsplash.com/1200x400/?moslem" class="card-img-top rounded mb-3" alt="img">
        <p>{!! $event->description !!}</p>
    </div>
    <h4>Blog Lainnya</h4>
    <div class="container mt-3 d-flex flex-row justify-content-around">
        @foreach($events as $event)
        <div class="card col-lg-3">
            <img src="https://source.unsplash.com/600x400/?moslem" class="card-img-top" alt="img">
            <div class="card-body">
                <h5 class="card-title">{{ $event->title }}</h5>
                <p class="card-text">{{ $event->excerpt }}</p>
                <a href="/events/{{ $event->slug }}" class="btn btn-primary">Read More</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection