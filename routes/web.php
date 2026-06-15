<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Profile;


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

Route::get('/blog', function (Request $request) {
    $category = $request->query('category');

    $posts = Post::latest('published_at')
        ->when($category, function ($query, $category) {
            return $query->where('category', $category);
        })
        ->get();

    return view('blog', [
        'title' => $category ? "Blog: $category" : "Blog",
        'posts' => $posts
    ]);
});

Route::get('/blog/{slug}', function ($slug) {
    $post = Post::where('slug', $slug)->firstOrFail();  
    return view('post', [
        'title' => $post->title,
        'post'  => $post,
    ]);
});

Route::get('/profile', function () {
    $profile = Profile::first();

    return view('profile', [
        'title' => 'Profile Founder',
        'profile' => $profile
    ]);
});