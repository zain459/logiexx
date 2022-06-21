<?php

use Illuminate\Support\Facades\Route;
use Logixs\Modules\Site\CourseController;
use Logixs\Modules\Site\HomeIndexController;
use Logixs\Modules\Site\WebinarPdfController;
use Logixs\Modules\Site\TestimonialController;
use Logixs\Modules\Site\CourseDetailController;
use Logixs\Modules\Site\viewAllPastWebinarController;
use Logixs\Modules\Site\ViewAllWebinarSeriesController;
use Logixs\Modules\User\Controllers\Auth\LoginController;
use Logixs\Modules\Site\ViewAllUpcomingWebinarController;
use Logixs\Modules\User\Controllers\AdminDashboardController;
use Logixs\Modules\Site\Enrollment\Controllers\CourseEnrollmentIndexController;
use Logixs\Modules\Site\Enrollment\Controllers\CourseEnrollmentStoreController;
use Logixs\Modules\Site\Enrollment\Controllers\CourseEnrollmentCreateController;

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login.show');
Route::post('login', [LoginController::class, 'login'])->name('login');

Route::middleware(['auth'])->group(function () {
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', AdminDashboardController::class)->name('admin.dashboard');
});
Route::get('site', HomeIndexController::class)->name('site.index');
Route::get('site/courses', CourseController::class)->name('site.course-index');
Route::get('site/{id}/course-detail', CourseDetailController::class)->name('site.course-detail');
Route::get('site/view-all-webinar-series', ViewAllWebinarSeriesController::class)->name('site.view-all-webinar');
Route::get('site/testimonial', TestimonialController::class)->name('site.testimonial-index');
Route::get('site/{id}/download-webinarPDF', WebinarPdfController::class)->name('site.webinar-pdf-download');
Route::get('site/view-all-upcoming-webinar-series', ViewAllUpcomingWebinarController::class)->name('site.view-all-upcoming-webinar-series');
Route::get('site/view-all-past-webinar-series', ViewAllPastWebinarController::class)->name('site.view-all-past-webinar-series');

//course-enrollment
Route::get('site/{id}/course-enrollment', CourseEnrollmentIndexController::class)->name('site.course-enrollment');
Route::get('site/{id}/create-course-enrollment', CourseEnrollmentCreateController::class)->name('site.course-enrollment-create');
Route::post('site/store-course-enrollment', CourseEnrollmentStoreController::class)->name('site.course-enrollment-store');

require __DIR__ . '/inventory.php';
require __DIR__ . '/course.php';
require __DIR__ . '/instructor.php';
require __DIR__ . '/testimonial.php';
require __DIR__ . '/event.php';
require __DIR__ . '/news.php';
require __DIR__ . '/pages.php';
require __DIR__ . '/webinars.php';
