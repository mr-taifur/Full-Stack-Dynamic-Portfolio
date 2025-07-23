<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;


// login_routes
Route::get('/login', function () {
    return view('auth.login');
});
Route::post('/login', [AuthenticationController::class, 'login'])->name('login');

// register_routes
Route::get('/register', function () {
    return view('auth.register');
});
Route::post('/register', [AuthenticationController::class, 'register'])->name('register');


Route::get('/', function () {
    return view('welcome');
});

// Admin Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// Route::get('/lp1', function () {
//     return view('lp1');
// });

// Route::get('/home', function () {
//     return view('home');
// });
