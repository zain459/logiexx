<?php

use Illuminate\Support\Facades\Route;
use Logixs\Controllers\Auth\LoginController;
use Logixs\Controllers\AdminDashboardController;
use Logixs\Controllers\Modules\Inventory\InventoryDashboardController;

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login.show');
Route::post('login', [LoginController::class, 'login'])->name('login');

Route::middleware(['auth'])->group(function () {
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('dashboard', AdminDashboardController::class)->name('admin.dashboard');
    Route::get('inventory', InventoryDashboardController::class)->name('inventory.dashboard');
});
