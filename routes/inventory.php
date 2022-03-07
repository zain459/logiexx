<?php

use Illuminate\Support\Facades\Route;
use Logixs\Modules\Partner\Controllers\PartnerIndexController;
use Logixs\Modules\Partner\Controllers\PartnerStoreController;
use Logixs\Modules\Partner\Controllers\PartnerUpdateController;
use Logixs\Modules\Inventory\Controllers\InventoryDashboardController;
use Logixs\Modules\Inventory\Controllers\Category\CategoryIndexController;
use Logixs\Modules\Inventory\Controllers\Category\CategoryStoreController;
use Logixs\Modules\Inventory\Controllers\Category\CategoryUpdateController;
use Logixs\Modules\Inventory\Controllers\SubjectArea\SubjectAreaIndexController;
use Logixs\Modules\Inventory\Controllers\SubjectArea\SubjectAreaStoreController;
use Logixs\Modules\Inventory\Controllers\SubjectArea\SubjectAreaUpdateController;

Route::prefix('setting')->middleware(['auth'])->group(function () {
    Route::get('dashboard', InventoryDashboardController::class)->name('inventory.dashboard');

    //category
    Route::get('category', CategoryIndexController::class)->name('inventory.category-index');
    Route::post('category/store', CategoryStoreController::class)->name('inventory.category-store');
    Route::post('category/{id}/update', CategoryUpdateController::class)->name('inventory.category-update');

    //subject area
    Route::get('subject-area', SubjectAreaIndexController::class)->name('inventory.subject-index');
    Route::post('subject-area/store', SubjectAreaStoreController::class)->name('inventory.subject-store');
    Route::post('subject-area/{id}/update', SubjectAreaUpdateController::class)->name('inventory.subject-update');

    //partners

    Route::get('partners', PartnerIndexController::class)->name('inventory.partner-index');
    Route::post('partner/store', PartnerStoreController::class)->name('inventory.partner-store');
    Route::post('partner/update', PartnerUpdateController::class)->name('inventory.partner-update');
});
