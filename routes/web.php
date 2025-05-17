<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

// Redirect root to login page
Route::get('/', function () {
    return redirect('/login');
});

// Guest routes (for non-authenticated users)
Route::middleware('guest')->group(function () {
    // Registration routes
    Route::get('/register', [RegisterController::class, 'show'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);

    // Login routes
    Route::get('/login', [LoginController::class, 'show'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

// Protected routes (require authentication)
Route::middleware('auth')->group(function () {
    Route::resource('products', ProductController::class);
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});