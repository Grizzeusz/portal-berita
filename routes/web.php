<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

// Halaman Utama
Route::get('/', function () {
    return view('blog', ['title' => 'Blog', 'posts' => Post::all()]);
});

// Halaman Blog
Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog', 'posts' => Post::all()]);
});

// Halaman Post Tunggal
Route::get('/blog/id={post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

// Halaman Profil
Route::get('/profile', function () {
    return view('profile', ['title' => 'Profile']);
});

// Rute Login
Route::get('/login', function () {
    return view('auth/login');
})->name('login');

// Proses Login
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');

// Grup Rute yang Memerlukan Autentikasi
Route::middleware('auth')->group(function () {

    // Halaman Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard', ['title' => 'Blog', 'posts' => Post::all()]);
    });

    // Form untuk Menambah Post
    Route::get('/form/post', function () {
        return view('form');
    });

    // Form untuk Mengedit Post
    Route::get('/form/post/edit/{slug}', function ($slug) {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('form', ['post' => $post]);
    })->name('post.edit');

    // Update Post
    Route::patch('/form/post/edit/{slug}', [PostController::class, 'update'])->name('post.update');

    // Simpan Post
    Route::post('/post', [PostController::class, 'store'])->name('post.store');

    // Hapus Post
    Route::delete('/post/delete/{slug}', [PostController::class, 'destroy'])->name('post.destroy');

    // Logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
