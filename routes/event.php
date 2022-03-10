<?php

use Illuminate\Support\Facades\Route;
use Logixs\Modules\Event\Controllers\EventIndexController;
use Logixs\Modules\Event\Controllers\EventStoreController;
use Logixs\Modules\Event\Controllers\EventCreateController;

Route::middleware(['auth'])->group(function () {
    Route::get('events', EventIndexController::class)->name('event-index');
    Route::get('event/create', EventCreateController::class)->name('event-create');
    Route::post('event/store', EventStoreController::class);
});
