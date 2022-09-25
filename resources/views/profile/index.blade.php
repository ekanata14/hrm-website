@extends('templates.main')

@section('container')
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center">
                <h1>Your Profile</h1>
            </div>
        </div>
        <div class="row">
            <div class="d-flex justify-content-center flex-column col-lg-4 mx-auto text-center">
                <div class="img mb-3">
                    <img src="images/images.jpg" alt="profile-picture" class="rounded-circle">
                </div>
                <div class="mb-3">
                    <h3>Name</h3>
                    <h5>Username</h5>
                    <h5>email@email.com</h5>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-primary btn-blue text-white">Edit Profile</button>
                    <button class="btn btn-warning mx-3">Change Password</button>
                </div>
            </div>
        </div>
    </div>
@endsection