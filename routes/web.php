<?php

use App\Models\Blog;
use App\Models\Events;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'blogs' => Blog::latest()->paginate(7),
        'events' => Events::latest()->paginate(7)
    ]);
});

Route::get('/about', function(){
    return view('about.index');
});

Route::get('/blogs', function(){
    return view('blogs.index',[
        'blogs' => Blog::latest()->paginate(7)
    ]);
});

Route::get('blogs/single', function(){
    return view('blogs.blogSingle',[
        'blog' => Blog::where('slug')
    ]);
});

Route::get('/events', function(){
    return view('events.index', [
        'events' => Events::latest()->paginate(7)
    ]);
});

Route::get('/profile', function(){
    return view('profile.index');
});
