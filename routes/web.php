<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ForgotPasswordController; 
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController; // Update the namespaces

Route::get('/', function () {
    return view('welcome');
});

// Define route for displaying the login form
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');

// Define route for the registration page
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');

// Define route for the admin dashboard page
Route::get('admin', [AdminController::class, 'showAdmindashboard'])->name('admin');

// Define route for the forgot password page
Route::get('forgot-password', [ForgotPasswordController::class, 'showForgotPasswordForm'])->name('forgot-password');

// Route to handle the registration form submission
Route::post('register-submit', [AuthController::class, 'register'])->name('register.submit');

// Route to handle the login authentication
Route::post('login-submit', [AuthController::class, 'login'])->name('login.submit');

// Route to handle the login main page access
Route::get('main', [AuthController::class, 'showMain'])->name('main');

// Routes for assigning roles and checking roles
Route::post('/assign-admin-role', [UserController::class, 'assignAdminRole']);
Route::get('/check-user-role/{id}', [UserController::class, 'checkUserRole']);

// Admin-only routes
Route::group(['middleware' => ['auth', 'role:admin']], function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    });
});

// User-only routes (accessible by admins too)
Route::group(['middleware' => ['auth', 'role:user']], function () {
    Route::get('/user', function () {
        return view('user.dashboard');
    });
});

// Authenticated user routes
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});