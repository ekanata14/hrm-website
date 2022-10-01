@extends('templates.main')

@section('container')
<div class="container mt-5 d-flex flex-column justify-content-around">
    <div class="row mb-3">
        <div class="col-lg-12">
        </div>
        <h1 class="text-center mb-3">{{ $blog->title }}</h1>
        <img src="https://source.unsplash.com/1200x400/?moslem" class="card-img-top rounded mb-3" alt="img">
        <p>{!! $blog->body !!}</p>
    </div>
    <h4>Blog Lainnya</h4>
    <div class="container mt-3 d-flex flex-row justify-content-around">
        @foreach($blogs as $blog)
        <div class="card col-lg-3">
            <img src="https://source.unsplash.com/600x400/?moslem" class="card-img-top" alt="img">
            <div class="card-body">
                <h5 class="card-title">{{ $blog->title }}</h5>
                <p class="card-text">{{ $blog->excerpt }}</p>
                <a href="/blogs/{{ $blog->slug }}" class="btn btn-primary">Read More</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection