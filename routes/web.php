<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get(
    '/dashboard',
    [DashboardController::class, 'index']
)->middleware(['auth', 'verified'])->name('dashboard');

Route::get(
    '/dashboard/users',
    [DashboardController::class, 'users']
)->middleware(['auth', 'verified'])->name('users');

Route::middleware('auth')->group(function () {
    Route::get('dashboard/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('dashboard/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('dashboard/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
