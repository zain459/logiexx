<?php

use Illuminate\Support\Facades\Route;
use Logixs\Modules\Course\Controllers\CourseEditController;
use Logixs\Modules\Course\Controllers\CourseIndexController;
use Logixs\Modules\Course\Controllers\CourseOtherInfoCreateController;
use Logixs\Modules\Course\Controllers\CourseOtherInfoIndexController;
use Logixs\Modules\Course\Controllers\CourseStoreController;
use Logixs\Modules\Course\Controllers\CourseCreateController;
use Logixs\Modules\Course\Controllers\CourseUpdateController;

Route::middleware(['auth'])->group(function () {
    Route::get('courses', CourseIndexController::class)->name('course-index');
    Route::get('course/create', CourseCreateController::class)->name('course-create');
    Route::post('course/store', CourseStoreController::class)->name('course-store');
    Route::get('course/{id}/edit', CourseEditController::class)->name('course-edit');
    Route::post('course/{id}/update', CourseUpdateController::class)->name('course-update');
    //other info
    Route::get('course/{id}/other-details',CourseOtherInfoIndexController::class)->name('course.other-info');
    Route::get('course/{id}/other-details/create',CourseOtherInfoCreateController::class)->name('course.other-info-create');
});
