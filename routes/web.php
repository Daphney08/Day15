<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [
    App\Http\Controllers\AuthController::class,
    'index'
])->name('app');


Route::get('/login', [
    App\Http\Controllers\AuthController::class,
    'login'
])->name('app.login');

Route::get('/login/verify', [
    App\Http\Controllers\AuthController::class,
    'login_verify'
])->name('app.login.verify');



Route::get('/registration', [
    App\Http\Controllers\AuthController::class,
    'registration'
])->name('app.registration');


Route::get('/registration/verify', [
    App\Http\Controllers\AuthController::class,
    'registration_verify'
])->name('app.registration.verify');
