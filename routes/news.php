<?php

use Illuminate\Support\Facades\Route;
use Logixs\Modules\News\Controllers\NewsEditController;
use Logixs\Modules\News\Controllers\NewsIndexController;
use Logixs\Modules\News\Controllers\NewsStoreController;
use Logixs\Modules\News\Controllers\NewsCreateController;
use Logixs\Modules\News\Controllers\NewsDeleteController;
use Logixs\Modules\News\Controllers\NewsUpdateController;

Route::middleware(['auth'])->group(function () {
    Route::get('news', NewsIndexController::class)->name('news-index');
    Route::get('news/create', NewsCreateController::class)->name('news-create');
    Route::post('news/store', NewsStoreController::class)->name('news-store');
    Route::post('news/{id}/delete', NewsDeleteController::class)->name('news-delete');
    Route::get('news/{id}/edit', NewsEditController::class)->name('news-edit');
    Route::post('news/{id}/update', NewsUpdateController::class)->name('news-update');
});
