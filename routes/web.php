<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Controllers\HomeController::class)->name('home');
Route::get ('/dashboard', \App\Http\Controllers\DashboardController::class)->name('dashboard');
Route::get('/users/{user:username}/posts', \App\Http\Actions\UserPostIndexAction::class)->name('users.posts');
Route::get('/posts', \App\Http\Actions\PostIndexAction::class)->name('posts');
Route::get('/posts/{post}', \App\Http\Actions\PostShowAction::class)->name('posts.show');
Route::post ('/logout', \App\Http\Actions\LogoutStoreAction::class)->name('logout');

Route::middleware('guest')->group(function() {
    Route::get ('/register', \App\Http\Actions\RegisterIndexAction::class)->name('register');
    Route::post ('/register', \App\Http\Actions\RegisterStoreAction::class);
    Route::get ('/login', \App\Http\Actions\LoginIndexAction::class)->name('login');
    Route::post ('/login', \App\Http\Actions\LoginStoreAction::class);
});

Route::middleware('auth')->group(function() {
    Route::post('/posts', \App\Http\Actions\PostStoreAction::class);
    Route::delete('/posts/{post}', \App\Http\Actions\PostDestroyAction::class)->name('posts.destroy');
    Route::post('/posts/{post}/likes', \App\Http\Actions\PostLikeStoreAction::class)->name('posts.likes');
    Route::delete('/posts/{post}/likes', \App\Http\Actions\PostLikeDestroyAction::class)->name('posts.likes');
});
