<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('home');
});

Route::get ('register', [RegisterController::class, 'index'])->name('register');

Route::get('/posts', function () {
    return view('posts.index');
});
