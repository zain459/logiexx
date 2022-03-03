<?php
use Illuminate\Support\Facades\Route;
use Logixs\Modules\Course\Controllers\CourseIndexController;


Route::middleware(['auth'])->group(function () {
Route::get('courses',CourseIndexController::class)->name('course-index');

});
