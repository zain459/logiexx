<?php

use Illuminate\Support\Facades\Route;
use Logixs\Modules\User\Controllers\Auth\LoginController;
use Logixs\Modules\User\Controllers\AdminDashboardController;

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login.show');
Route::post('login', [LoginController::class, 'login'])->name('login');

Route::middleware(['auth'])->group(function () {
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', AdminDashboardController::class)->name('admin.dashboard');
});

require __DIR__.'/inventory.php';
require __DIR__.'/course.php';
require __DIR__.'/instructor.php';
require __DIR__.'/testimonial.php';
