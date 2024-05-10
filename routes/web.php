<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/login', LoginController::class);
Route::resource('/register', RegisterController::class);
Route::resource('/dashboard', UserController::class);