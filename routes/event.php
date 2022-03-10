<?php

use Illuminate\Support\Facades\Route;
use Logixs\Modules\Event\Controllers\EventEditController;
use Logixs\Modules\Event\Controllers\EventIndexController;
use Logixs\Modules\Event\Controllers\EventStoreController;
use Logixs\Modules\Event\Controllers\EventCreateController;
use Logixs\Modules\Event\Controllers\EventUpdateController;

Route::middleware(['auth'])->group(function () {
    Route::get('events', EventIndexController::class)->name('event-index');
    Route::get('event/create', EventCreateController::class)->name('event-create');
    Route::post('event/store', EventStoreController::class);
    Route::get('event/{id}/edit', EventEditController::class)->name('event-edit');
    Route::post('event/{id}/update', EventUpdateController::class);
});
