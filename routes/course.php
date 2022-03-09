<?php

use Illuminate\Support\Facades\Route;
use Logixs\Modules\Course\Controllers\CourseEditController;
use Logixs\Modules\Course\Controllers\CourseIndexController;
use Logixs\Modules\Course\Controllers\CourseStoreController;
use Logixs\Modules\Course\Controllers\CourseCreateController;
use Logixs\Modules\Course\Controllers\CourseUpdateController;
use Logixs\Modules\Course\Controllers\FeedbackIndexController;
use Logixs\Modules\Course\Controllers\FeedbackStoreController;
use Logixs\Modules\Course\Controllers\FeedbackDeleteController;
use Logixs\Modules\Course\Controllers\FeedbackUpdateController;
use Logixs\Modules\Course\Controllers\CoursePartnerIndexController;
use Logixs\Modules\Course\Controllers\CoursePartnerStoreController;
use Logixs\Modules\Course\Controllers\CourseOtherInfoEditController;
use Logixs\Modules\Course\Controllers\CoursePartnerDeleteController;
use Logixs\Modules\Course\Controllers\CourseOtherInfoIndexController;
use Logixs\Modules\Course\Controllers\CourseOtherInfoStoreController;
use Logixs\Modules\Course\Controllers\CourseInstructorIndexController;
use Logixs\Modules\Course\Controllers\CourseOtherInfoCreateController;
use Logixs\Modules\Course\Controllers\CourseOtherInfoDeleteController;
use Logixs\Modules\Course\Controllers\CourseOtherInfoUpdateController;
use Logixs\Modules\Course\Controllers\CourseInstructorAssignController;
use Logixs\Modules\Course\Controllers\CourseInstructorDeleteController;

Route::middleware(['auth'])->group(function () {
    Route::get('courses', CourseIndexController::class)->name('course-index');

    Route::prefix('course')->group(function () {
        Route::get('create', CourseCreateController::class)->name('course-create');
        Route::post('store', CourseStoreController::class)->name('course-store');
        Route::get('{id}/edit', CourseEditController::class)->name('course-edit');
        Route::post('{id}/update', CourseUpdateController::class)->name('course-update');

        //other info
        Route::get('{id}/other-details', CourseOtherInfoIndexController::class)->name('course.other-info');
        Route::get('{id}/other-details/create', CourseOtherInfoCreateController::class)->name('course.other-info-create');
        Route::post('other-details/store', CourseOtherInfoStoreController::class)->name('course.other-info-store');
        Route::post('{id}/other-details/delete', CourseOtherInfoDeleteController::class)->name('course.other-info-delete');
        Route::get('{id}/other-details/edit', CourseOtherInfoEditController::class)->name('course.other-info-edit');

        Route::post('{id}/other-details/update', CourseOtherInfoUpdateController::class)->name('course.other-info-update');

        //Affiliated Partners
        Route::get('{id}/partners', CoursePartnerIndexController::class)->name('course.partner-index');
        Route::post('partner/assign', CoursePartnerStoreController::class)->name('course.partner.assign-course');
        Route::post('partner/assign/{id}/delete', CoursePartnerDeleteController::class)->name('course.partner-delete');

        //feedback
        Route::get('{id}/feedback', FeedbackIndexController::class)->name('course.feedback-index');
        Route::post('store/feedback', FeedbackStoreController::class)->name('course.feedback-store');
        Route::post('update/feedback', FeedbackUpdateController::class)->name('course.feedback-update');
        Route::post('feedback/{id}/delete', FeedbackDeleteController::class)->name('course.feedback-delete');

        //assign instructors
        Route::get('{id}/instructors', CourseInstructorIndexController::class)->name('course.instructors-index');
        Route::post('instructors/assign', CourseInstructorAssignController::class)->name('course.instructors-assign');
        Route::post('instructors/{id}/delete', CourseInstructorDeleteController::class)->name('course.instructors-delete');
    });
});
