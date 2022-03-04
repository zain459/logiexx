<?php

use Illuminate\Support\Facades\Route;
use Logixs\Modules\Course\Controllers\CourseIndexController;
use Logixs\Modules\Course\Controllers\CourseStoreController;
use Logixs\Modules\Course\Controllers\CourseCreateController;

Route::middleware(['auth'])->group(function () {
    Route::get('courses', CourseIndexController::class)->name('course-index');
    Route::get('courses/create', CourseCreateController::class)->name('course-create');
    Route::post('courses/store', CourseStoreController::class)->name('course-store');
});
