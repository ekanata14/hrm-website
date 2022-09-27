@extends('templates.main')

@section('container')
<div class="bg-blue p-3" style="height: 500px">
    <div class="container d-flex flex-column justify-content-center align-items-center h-100 text-white bg-image rounded position-relative">
        <div class="position-absolute bottom-0 end-0 bg-danger rounded px-4 py-3">
            <p class="mb-0">Blogs</p>
        </div>
        <div class="text-container col-lg-6 text-center p-3 rounded" style="background-color: rgba(0, 0, 0, 0.3)">
            <h1>{{ $blogs[0]->title }}</h1>
            <h5>{{ $blogs[0]->excerpt }}</h5>
            <button class="btn btn-info">Read More</button>
        </div>
    </div>
</div>
<div class="container mt-5 d-flex flex-row justify-content-around flex-wrap">
    @foreach($blogs->skip(1) as $blog)
    <div class="card col-lg-3 mb-5 mx-1">
        <img src="https://source.unsplash.com/600x400/?moslem" class="card-img-top" alt="img">
        <div class="card-body">
            <h5 class="card-title">{{ $blog->title }}</h5>
            <p class="card-text">{{ $blog->excerpt }}</p>
            <a href="/blogs/single" class="btn btn-primary">Read More</a>
        </div>
    </div>
    @endforeach
</div>
<div class="container d-flex justify-content-end">
    {{ $blogs->links() }}
</div>

@endsection