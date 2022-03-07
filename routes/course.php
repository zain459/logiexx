<?php

use Illuminate\Support\Facades\Route;
use Logixs\Modules\Course\Controllers\CourseEditController;
use Logixs\Modules\Course\Controllers\CourseIndexController;
use Logixs\Modules\Course\Controllers\CourseOtherInfoDeleteController;
use Logixs\Modules\Course\Controllers\CourseOtherInfoEditController;
use Logixs\Modules\Course\Controllers\CourseOtherInfoUpdateController;
use Logixs\Modules\Course\Controllers\CourseStoreController;
use Logixs\Modules\Course\Controllers\CourseCreateController;
use Logixs\Modules\Course\Controllers\CourseUpdateController;
use Logixs\Modules\Course\Controllers\CourseOtherInfoIndexController;
use Logixs\Modules\Course\Controllers\CourseOtherInfoStoreController;
use Logixs\Modules\Course\Controllers\CourseOtherInfoCreateController;

Route::middleware(['auth'])->group(function () {
    Route::get('courses', CourseIndexController::class)->name('course-index');
    Route::get('course/create', CourseCreateController::class)->name('course-create');
    Route::post('course/store', CourseStoreController::class)->name('course-store');
    Route::get('course/{id}/edit', CourseEditController::class)->name('course-edit');
    Route::post('course/{id}/update', CourseUpdateController::class)->name('course-update');
    //other info
    Route::get('course/{id}/other-details', CourseOtherInfoIndexController::class)->name('course.other-info');
    Route::get('course/{id}/other-details/create', CourseOtherInfoCreateController::class)->name('course.other-info-create');
    Route::post('course/other-details/store', CourseOtherInfoStoreController::class)->name('course.other-info-store');
    Route::post('course/{id}/other-details/delete', CourseOtherInfoDeleteController::class)->name('course.other-info-delete');
    Route::get('course/{id}/other-details/edit', CourseOtherInfoEditController::class)->name('course.other-info-edit');

    Route::post('course/{id}/other-details/update', CourseOtherInfoUpdateController::class)->name('course.other-info-update');
});
