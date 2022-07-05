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
use Logixs\Modules\Site\Calendar\ClassCalendarIndexController;
use Logixs\Modules\Site\CertificateAuthenticationIndexController;
use Logixs\Modules\Site\CertificateAuthenticationverificationController;
use Logixs\Modules\Site\FeedBack\Controllers\LearnerFeedBackIndexController;
use Logixs\Modules\Site\Enrollment\Controllers\CourseClassEnrollmentIndexController;
use Logixs\Modules\Site\Enrollment\Controllers\CourseClassEnrollmentStoreController;
use Logixs\Modules\Site\Enrollment\Controllers\CourseClassEnrollmentCreateController;
use Logixs\Modules\Site\WebinarRegistrationForm\Controllers\WebinarRegistrationFormIndex;
use Logixs\Modules\site\BecomeAnInstructor\Controllers\BecomeAnInstructorIndexController;
use Logixs\Modules\site\BecomeAnInstructor\Controllers\BecomeAnInstructorStoreController;
use Logixs\Modules\site\CorporatePartnership\Controllers\CorporatePartnershipStoreController;
use Logixs\Modules\site\CorporatePartnership\Controllers\CorporatePartnershipIndexController;

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login.show');
Route::post('login', [LoginController::class, 'login'])->name('login');

Route::middleware(['auth'])->group(function () {
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});

Route::get('site', HomeIndexController::class)->name('site.index');
Route::get('site/courses', CourseController::class)->name('site.course-index');
Route::get('site/course/{id}/detail', CourseDetailController::class)->name('site.course-detail');
Route::get('site/testimonial', TestimonialController::class)->name('site.testimonial-index');
Route::get('site/view-all-webinar-series', ViewAllWebinarSeriesController::class)->name('site.view-all-webinar');
Route::get('site/{id}/download-webinarPDF', WebinarPdfController::class)->name('site.webinar-pdf-download');
Route::get('site/view-all-upcoming-webinar-series', ViewAllUpcomingWebinarController::class)->name('site.view-all-upcoming-webinar-series');
Route::get('site/view-all-past-webinar-series', ViewAllPastWebinarController::class)->name('site.view-all-past-webinar-series');

//course-enrollment
Route::get('site/class/{id}/enrollment', CourseClassEnrollmentIndexController::class)->name('site.course-class-enrollment');
Route::get('site/class/{id}/enrollment-create', CourseClassEnrollmentCreateController::class)->name('site.course-class-enrollment-create');
Route::post('site/store-class-enrollment', CourseClassEnrollmentStoreController::class)->name('site.course-class-enrollment-store');

//certificate-authentication
Route::get('site/certificate-authentication', CertificateAuthenticationIndexController::class)->name('site.certificate-authentication.index');
Route::post('site/certificate-authentication-verification', CertificateAuthenticationverificationController::class)->name('site.certificate-authentication-verification');

//class-calendar
Route::get('site/course/{id}/class-calendar', ClassCalendarIndexController::class)->name('site.class-calendar.index');

//Corporate Partnership
Route::get('site/corporate-partnership', CorporatePartnershipIndexController::class)->name('site.corporate-partnership');
Route::post('site/corporate-partnership-store', CorporatePartnershipStoreController::class)->name('corporate-partnership.store');

//become-an-instructor
Route::get('site/become-an-instructor', BecomeAnInstructorIndexController::class)->name('site.become-an-instructor.index');
Route::post('site/become-an-instructor-store', BecomeAnInstructorStoreController::class)->name('site.become-an-instructor.store');

//learner-feedback
Route::get('site/learner-feedback', LearnerFeedBackIndexController::class)->name('site.learner-feedback.index');

//webinar-registration-form
Route::get('site/webinar-registration-form', WebinarRegistrationFormIndex::class)->name('site.webinar-registration-form');

require __DIR__ . '/inventory.php';
require __DIR__ . '/course.php';
require __DIR__ . '/instructor.php';
require __DIR__ . '/testimonial.php';
require __DIR__ . '/event.php';
require __DIR__ . '/news.php';
require __DIR__ . '/pages.php';
require __DIR__ . '/webinars.php';
require __DIR__ . '/admin.php';


