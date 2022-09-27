@extends('templates.main')

@section('container')
<div class="bg-blue p-3" style="height: 500px">
    <div class="container d-flex flex-column justify-content-center align-items-center h-100 text-white bg-image rounded position-relative">
        <h1>About Us</h1>
            <h5>Our Association Manager and Members</h5>
        </div>
    </div>
</div>
<div class="container mt-5 d-flex flex-row justify-content-around">
    <div class="card col-lg-3 bg-image" style="height:300px">
        <div class="card-body d-flex align-items-bottom h-100">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
    <div class="card col-lg-3 bg-image">
        <div class="card-body" style="height: 300px">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
    <div class="card col-lg-3 bg-image" style="height: 300px">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
</div>
@endsection