<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Actions\Home\IndexAction::class)->name('home');
Route::get('/users/{user:username}/posts', \App\Http\Actions\UserPost\IndexAction::class)->name('users.posts');
Route::get('/posts', \App\Http\Actions\Post\IndexAction::class)->name('posts');
Route::get('/posts/{post}', \App\Http\Actions\Post\ShowAction::class)->name('posts.show');
Route::post ('/logout', \App\Http\Actions\Logout\StoreAction::class)->name('logout');

Route::middleware('guest')->group(function() {
    Route::get ('/register', \App\Http\Actions\Register\IndexAction::class)->name('register');
    Route::post ('/register', \App\Http\Actions\Register\StoreAction::class);
    Route::get ('/login', \App\Http\Actions\Login\IndexAction::class)->name('login');
    Route::post ('/login', \App\Http\Actions\Login\StoreAction::class);
});

Route::middleware('auth')->group(function() {
    Route::get ('/dashboard', \App\Http\Actions\Dashboard\IndexAction::class)->name('dashboard');
    Route::post('/posts', \App\Http\Actions\Post\StoreAction::class);
    Route::delete('/posts/{post}', \App\Http\Actions\Post\DestroyAction::class)->name('posts.destroy');
    Route::post('/posts/{post}/likes', \App\Http\Actions\PostLike\StoreAction::class)->name('posts.likes');
    Route::delete('/posts/{post}/likes', \App\Http\Actions\PostLike\DestroyAction::class)->name('posts.likes');
});
