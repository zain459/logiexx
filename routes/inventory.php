<?php

use Illuminate\Support\Facades\Route;
use Logixs\Modules\Inventory\Controllers\InventoryDashboardController;
use Logixs\Modules\Inventory\Controllers\Category\CategoryIndexController;
use Logixs\Modules\Inventory\Controllers\Category\CategoryStoreController;
use Logixs\Modules\Inventory\Controllers\Category\CategoryUpdateController;
use Logixs\Modules\Inventory\Controllers\SubjectArea\SubjectAreaIndexController;
use Logixs\Modules\Inventory\Controllers\SubjectArea\SubjectAreaStoreController;
use Logixs\Modules\Inventory\Controllers\SubjectArea\SubjectAreaUpdateController;

Route::middleware(['auth'])->group(function () {
    Route::get('setting/dashboard', InventoryDashboardController::class)->name('inventory.dashboard');

    //category
    Route::get('setting/category', CategoryIndexController::class)->name('inventory.category-index');
    Route::post('setting/category/store', CategoryStoreController::class)->name('inventory.category-store');
    Route::post('setting/category/{id}/update', CategoryUpdateController::class)->name('inventory.category-update');

    //subject area
    Route::get('setting/subject-area', SubjectAreaIndexController::class)->name('inventory.subject-index');
    Route::post('setting/subject-area/store', SubjectAreaStoreController::class)->name('inventory.subject-store');
    Route::post('setting/subject-area/{id}/update', SubjectAreaUpdateController::class)->name('inventory.subject-update');
});
