<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Public routes
Route::get('/', function () {
    return view('Home');
});
Route::get('/about', function () {
    return view('About');
});
Route::get('/contact', function () {
    return view('Contact');
});
Route::get('/cars', [CarController::class, 'index'])->name('cars.index');
Route::get('/cars/{carSlug}', [CarController::class, 'show'])->name('car.show');

// Authentication routes
Route::get('/admin', [AuthController::class, 'showLogin'])->name('login');
Route::post('/admin/login', [AuthController::class, 'login']);
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/admin/forgot-password', [AuthController::class, 'showForgotPassword'])->name('password.request');
Route::post('/admin/forgot-password', [AuthController::class, 'sendResetLink'])->name('password.email');
Route::get('/admin/reset-password/{token}', [AuthController::class, 'showResetForm'])->name('password.reset');
Route::post('/admin/reset-password', [AuthController::class, 'resetPassword'])->name('password.update');

// Dashboard routes (protected)
Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Car management routes
    Route::group(['prefix' => 'dashboard/cars', 'as' => 'dashboard.cars.'], function () {
        Route::get('/create', [DashboardController::class, 'createCar'])->name('create');
        Route::post('/', [DashboardController::class, 'storeCar'])->name('store');
        Route::get('/{car}/edit', [DashboardController::class, 'editCar'])->name('edit');
        Route::put('/{car}', [DashboardController::class, 'updateCar'])->name('update');
        Route::delete('/{car}', [DashboardController::class, 'destroyCar'])->name('destroy');
    });
});

Route::post('/send-email', [ContactController::class, 'sendEmail'])->name('send.email');

Route::get('/proxy/{path}', function($path) {
    return redirect(url($path));
})->where('path', '.*');
