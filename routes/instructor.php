<?php

use Illuminate\Support\Facades\Route;
use Logixs\Modules\Instructor\Controllers\InstructorIndexController;
use Logixs\Modules\Instructor\Controllers\InstructorStoreController;
use Logixs\Modules\Instructor\Controllers\InstructorUpdateController;

Route::middleware(['auth'])->group(function () {
    Route::get('instructors', InstructorIndexController::class)->name('instructor.index');
    Route::post('instructor/store', InstructorStoreController::class)->name('instructor.store');
    Route::post('instructor/{id}/update', InstructorUpdateController::class)->name('instructor.update');
});
