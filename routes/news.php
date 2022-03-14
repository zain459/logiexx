<?php

use Illuminate\Support\Facades\Route;
use Logixs\Modules\News\Controllers\NewsIndexController;
use Logixs\Modules\News\Controllers\NewsStoreController;
use Logixs\Modules\News\Controllers\NewsCreateController;
use Logixs\Modules\News\Controllers\NewsDeleteController;

Route::middleware(['auth'])->group(function () {
    Route::get('news', NewsIndexController::class)->name('news-index');
    Route::get('news', NewsIndexController::class)->name('news-index');
    Route::get('news/create', NewsCreateController::class)->name('news-create');
    Route::post('news/store', NewsStoreController::class);
    Route::post('news/{id}/delete', NewsDeleteController::class)->name('news-delete');
});
