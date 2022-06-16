<?php

use Illuminate\Support\Facades\Route;
use Logixs\Modules\Webinar\Controllers\WebinarDeleteController;
use Logixs\Modules\Webinar\Controllers\WebinarEditController;
use Logixs\Modules\Webinar\Controllers\WebinarIndexController;
use Logixs\Modules\Webinar\Controllers\WebinarStoreController;
use Logixs\Modules\Webinar\Controllers\WebniarCreateController;
use Logixs\Modules\Webinar\Controllers\WebinarUpdateController;

Route::middleware(['auth'])->group(function () {
    Route::get('webinars', WebinarIndexController::class)->name('webinar-index');
    Route::get('webinars/create', WebniarCreateController::class)->name('webinar-create');
    Route::post('webinars/store',WebinarStoreController::class)->name('webinar-store');
    Route::get('webinars/{id}/edit', WebinarEditController::class)->name('webinar-edit');
    Route::post('webinars/{id}/update', WebinarUpdateController::class)->name('webinar-update');
    Route::post('webinars/{id}/delete', WebinarDeleteController::class)->name('webinar-delete');
});
