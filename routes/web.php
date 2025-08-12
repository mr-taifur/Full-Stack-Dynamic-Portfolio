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
// logout_routes
use Illuminate\Support\Facades\Auth;

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');


// register_routes
Route::get('/register', function () {
    return view('auth.register');
});
Route::post('/register', [AuthenticationController::class, 'register'])->name('register');

// Admin Registration Routes (only accessible if not logged in)
Route::middleware('guest')->group(function () {
    Route::get('/admin/register', [AuthenticationController::class, 'showAdminRegisterForm'])->name('admin.register.form');
    Route::post('/admin/register', [AuthenticationController::class, 'adminRegister'])->name('admin.register');
});


Route::get('/', function () {
    return view('welcome');
});

// Admin Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});


Route::middleware(['auth', 'isadmin'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::delete('/admin/users/{id}', [DashboardController::class, 'deleteUser'])->name('admin.users.delete');
});


