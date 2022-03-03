<?php

use Illuminate\Support\Facades\Route;
use Logixs\Modules\Inventory\Controllers\InventoryDashboardController;
use Logixs\Modules\Inventory\Controllers\Category\CategoryIndexController;
use Logixs\Modules\Inventory\Controllers\Category\CategoryStoreController;
use Logixs\Modules\Inventory\Controllers\Category\CategoryUpdateController;
use Logixs\Modules\Inventory\Controllers\SubjectArea\SubjectAreaIndexController;
use Logixs\Modules\Inventory\Controllers\SubjectArea\SubjectAreaStoreController;
use Logixs\Modules\Inventory\Controllers\SubjectArea\SubjectAreaUpdateController;

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('inventory/dashboard', InventoryDashboardController::class)->name('inventory.dashboard');

    //category
    Route::get('inventory/category', CategoryIndexController::class)->name('inventory.category-index');
    Route::post('inventory/category/store', CategoryStoreController::class)->name('inventory.category-store');
    Route::post('inventory/category/{id}/update', CategoryUpdateController::class)->name('inventory.category-update');

    //subject area
    Route::get('inventory/subject-area', SubjectAreaIndexController::class)->name('inventory.subject-index');
    Route::post('inventory/subject-area/store', SubjectAreaStoreController::class)->name('inventory.subject-store');
    Route::post('inventory/subject-area/{id}/update', SubjectAreaUpdateController::class)->name('inventory.subject-update');
});
