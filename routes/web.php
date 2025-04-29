<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk login backend
Route::get('backend/login', [LoginController::class, 'loginBackend'])->name('backend.login');
Route::post('backend/login', [LoginController::class, 'authenticateBackend'])->name('backend.login.post');
Route::post('backend/logout', [LoginController::class, 'logoutBackend'])->name('backend.logout');

// Route beranda
Route::get('backend/beranda', [BerandaController::class, 'berandaBackend'])->name('backend.beranda');