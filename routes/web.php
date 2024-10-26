<?php

use App\Http\Controllers\LoginController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

use App\Models\Post;
use App\Models\User;

// Route::get('/', function () {
//     return view('home', ['title' => 'Home Page']);
// });

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog', 'posts' => Post::all()]);
});
Route::get('/dashboard', function () {
    return view('dashboard', ['title' => 'Blog', 'posts' => Post::all()]);
});


Route::get('/', function () {
    return view('blog', ['title' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/blog/id={post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/profile', function () {
    return view('profile', ['title' => 'profile']);
});

Route::get('/login', function () {
    return view('auth/login', ['title' => 'profile']);
});

Route::get('/form/post', function () {
    return view('form');
});

Route::get('/authors/{user}', function (User $user) {
    return view('blog', ['title' => 'Articles by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category}', function (Category $category) {
    return view('blog', ['title' => 'Category ' . $category->name_category, 'posts' => $category->posts]);
});

Route::post('/',  ['title' => 'Login', LoginController::class, 'authenticate']);
