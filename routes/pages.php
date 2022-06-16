<?php

use Illuminate\Support\Facades\Route;
use Logixs\Modules\Pages\Controllers\PageEditController;
use Logixs\Modules\Pages\Controllers\PageIndexController;
use Logixs\Modules\Pages\Controllers\PageStoreController;
use Logixs\Modules\Pages\Controllers\PageCreateController;
use Logixs\Modules\Pages\Controllers\PageDeleteController;
use Logixs\Modules\Pages\Controllers\PageUpdateController;

Route::middleware(['auth'])->group(function () {
    Route::get('pages', PageIndexController::class)->name('pages-index');
    Route::get('pages/create', PageCreateController::class)->name('pages-create');
    Route::post('pages/store', PageStoreController::class)->name('pages-store');
    Route::get('pages/{id}/edit', PageEditController::class)->name('pages-edit');
    Route::post('pages/{id}/update', PageUpdateController::class)->name('pages-update');
    Route::post('pages/{id}/delete', PageDeleteController::class)->name('pages-delete');
});
