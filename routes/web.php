<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\UserPostController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

// Show
Route::get('/', \App\Http\Controllers\HomeController::class)->name('home');
Route::get ('/dashboard', \App\Http\Controllers\DashboardController::class)->name('dashboard');
Route::get('/users/{user:username}/posts', [UserPostController::class, 'index'])->name('users.posts');
Route::get ('/register', [RegisterController::class, 'index'])->name('register');
Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

// Create
Route::post('/posts', [PostController::class, 'store']);
Route::post ('/logout', \App\Http\Actions\LogoutStoreAction::class)->name('logout');
Route::post ('/register', [RegisterController::class, 'store']);

// Login
Route::middleware('guest')->group(function() {
    Route::get ('/login', \App\Http\Actions\LoginIndexAction::class)->name('login');
    Route::post ('/login', \App\Http\Actions\LoginStoreAction::class);
});

// Update
Route::post('/posts/{post}/likes', [PostLikeController::class, 'store'])->name('posts.likes');

// Delete
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
Route::delete('/posts/{post}/likes', [PostLikeController::class, 'destroy'])->name('posts.likes');

