<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\Partner\PartnerIndexController;
use App\Http\Controllers\Admin\Partner\PartnerStoreController;
use App\Http\Controllers\Admin\Partner\PartnerUpdateController;
use App\Http\Controllers\Admin\Category\CategoryIndexController;
use App\Http\Controllers\Admin\Category\CategoryStoreController;
use App\Http\Controllers\Admin\Category\CategoryUpdateController;
use App\Http\Controllers\Admin\Setting\SettingDashboardController;
use App\Http\Controllers\Admin\SubjectArea\SubjectAreaIndexController;
use App\Http\Controllers\Admin\SubjectArea\SubjectAreaStoreController;
use App\Http\Controllers\Admin\SubjectArea\SubjectAreaUpdateController;
use App\Http\Controllers\Admin\FeaturedCourse\FeaturedCourseIndexController;
use App\Http\Controllers\Admin\FeaturedCourse\FeaturedCourseStoreController;
use App\Http\Controllers\Admin\FeaturedCourse\FeaturedCourseDeleteController;

Route::prefix('admin')->middleware(['auth'])->group(function () {

    // dashboard
    Route::get('dashboard', AdminDashboardController::class)->name('admin.dashboard');

    // featured courses
    Route::get('featured-courses', FeaturedCourseIndexController::class)->name('admin.featured-course.index');
    Route::post('featured-courses/store', FeaturedCourseStoreController::class)->name('admin.featured-course.store');
    Route::post('feature-courses/{id}/delete', FeaturedCourseDeleteController::class)->name('admin.featured-course.delete');

    // categories
    Route::get('categories', CategoryIndexController::class)->name('admin.category.index');
    Route::post('categories/store', CategoryStoreController::class)->name('admin.category.store');
    Route::post('categories/{id}/update', CategoryUpdateController::class)->name('admin.category.update');

    //subject area
    Route::get('subject-areas', SubjectAreaIndexController::class)->name('admin.subject-area.index');
    Route::post('subject-areas/store', SubjectAreaStoreController::class)->name('admin.subject-area.store');
    Route::post('subject-areas/{id}/update', SubjectAreaUpdateController::class)->name('admin.subject-area.update');

    //partners
//    Route::get('partners', PartnerIndexController::class)->name('admin.partner.index');
//    Route::post('partner/store', PartnerStoreController::class)->name('admin.partner.store');
//    Route::post('partner/update', PartnerUpdateController::class)->name('admin.partner.update');

    //setting
    Route::get('settings', SettingDashboardController::class)->name('admin.setting.dashboard');
});
