@extends('templates.main')

@section('container')
<div class="bg-blue p-3" style="height: 500px">
    <div class="container d-flex flex-column justify-content-center align-items-center h-100 text-white bg-image rounded position-relative">
        <div class="position-absolute bottom-0 end-0 bg-danger rounded px-4 py-3">
            <p class="mb-0">Blogs</p>
        </div>
        <h1>Blogs</h1>
            <h5>Blogs Excerpt</h5>
            <button class="btn btn-info">Read More</button>
        </div>
    </div>
</div>
<div class="container mt-5 d-flex flex-row justify-content-around">
    <div class="card col-lg-3">
        <img src="https://source.unsplash.com/600x400/?moslem" class="card-img-top" alt="img">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <div class="card col-lg-3">
        <img src="https://source.unsplash.com/600x400/?moslem" class="card-img-top" alt="img">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <div class="card col-lg-3">
        <img src="https://source.unsplash.com/600x400/?moslem" class="card-img-top" alt="img">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>

@endsection