<?php

use Illuminate\Support\Facades\Route;
use Logixs\Modules\Testimonial\Controllers\TestimonialDeleteController;
use Logixs\Modules\Testimonial\Controllers\TestimonialEditController;
use Logixs\Modules\Testimonial\Controllers\TestimonialIndexController;
use Logixs\Modules\Testimonial\Controllers\TestimonialStoreController;
use Logixs\Modules\Testimonial\Controllers\TestimonialCreateController;
use Logixs\Modules\Testimonial\Controllers\TestimonialUpdateController;

Route::middleware(['auth'])->group(function () {
    Route::get('testimonials', TestimonialIndexController::class)->name('testimonial-index');
    Route::get('testimonial/create', TestimonialCreateController::class)->name('testimonial-create');
    Route::post('testimonial/store', TestimonialStoreController::class)->name('testimonial-store');
    Route::get('testimonial/{id}/edit', TestimonialEditController::class)->name('testimonial-edit');
    Route::post('testimonial/{id}/delete', TestimonialDeleteController::class)->name('testimonial.delete');
    Route::post('testimonial/update', TestimonialUpdateController::class)->name('testimonial-update');
});
