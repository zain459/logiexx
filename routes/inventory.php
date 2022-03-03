<?php

use Illuminate\Support\Facades\Route;
use Logixs\Controllers\Modules\Inventory\Controllers\InventoryDashboardController;
use Logixs\Controllers\Modules\Inventory\Controllers\Category\CategoryIndexController;
use Logixs\Controllers\Modules\Inventory\Controllers\Category\CategoryStoreController;
use Logixs\Controllers\Modules\Inventory\Controllers\Category\CategoryUpdateController;
use Logixs\Controllers\Modules\Inventory\Controllers\SubjectArea\SubjectAreaIndexController;
use Logixs\Controllers\Modules\Inventory\Controllers\SubjectArea\SubjectAreaStoreController;

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('inventory/dashboard', InventoryDashboardController::class)->name('inventory.dashboard');

    //category
    Route::get('inventory/category', CategoryIndexController::class)->name('inventory.category-index');
    Route::post('inventory/category/store', CategoryStoreController::class)->name('inventory.category-store');
    Route::post('inventory/category/{id}/update', CategoryUpdateController::class)->name('inventory.category-update');

    //subject area
    Route::get('inventory/subject-area', SubjectAreaIndexController::class)->name('inventory.subject-index');
    Route::post('inventory/subject-area/store', SubjectAreaStoreController::class)->name('inventory.subject-store');
    Route::post('inventory/subject-area/{id}/update', SubjectAreaStoreController::class)->name('inventory.subject-update');
});
