<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return inertia('Home');
});

Route::get('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::get('/register', [App\Http\Controllers\AuthController::class, 'register'])->name('register');
