<?php

use App\Http\Controllers\Admin\Category\CategoryIndexController;
use App\Http\Controllers\Admin\Category\CategoryStoreController;
use App\Http\Controllers\Admin\Category\CategoryUpdateController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware(['auth'])->group(function () {

    // dashboard
    Route::get('dashboard', \App\Http\Controllers\Admin\AdminDashboardController::class)->name('admin.dashboard');

    // featured courses
    Route::get('featured-courses', \App\Http\Controllers\Admin\FeaturedCourse\FeaturedCourseIndexController::class)->name('admin.featured-course.index');
    Route::post('featured-courses/store', \App\Http\Controllers\Admin\FeaturedCourse\FeaturedCourseStoreController::class)->name('admin.featured-course.store');

    // categories
    Route::get('categories', CategoryIndexController::class)->name('admin.category.index');
    Route::post('categories/store', CategoryStoreController::class)->name('admin.category.store');
    Route::post('categories/{id}/update', CategoryUpdateController::class)->name('admin.category.update');

    //setting
    Route::get('settings', \App\Http\Controllers\Admin\Setting\SettingDashboardController::class)->name('admin.setting.dashboard');
});
