<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth') // Pastikan pengguna login sebelum mengakses
    ->name('dashboard');
