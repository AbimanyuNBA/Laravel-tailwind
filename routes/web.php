<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
    return view('home',['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ["nama" => "Abi", 'title'=>'Halaman About']);
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/project', function () {
    return view('project');
});

Route::get('/founder', function () {
    return view('founder');
});

Route::get('/blog', function () {
    return view('blog', [
        'title' => 'Blog',
        'posts' => Post::all(),   
    ]);
});

Route::get('/blog/{slug}', function ($slug) {
    $post = Post::where('slug', $slug)->firstOrFail();  
    return view('post', [
        'title' => $post->title,
        'post'  => $post,
    ]);
});
