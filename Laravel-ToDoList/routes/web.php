<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Container\Attributes\Auth;

Route::view('/', 'users.dashboard')->name('dashboard');

Route::view('/register','auth.register')->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::view('/login','auth.login')->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

