<?php

use Illuminate\Support\Facades\Route;
use Logixs\Modules\Site\CourseController;
use Logixs\Modules\Site\HomeIndexController;
use Logixs\Modules\Site\WebinarPdfController;
use Logixs\Modules\Site\TestimonialController;
use Logixs\Modules\Site\CourseDetailController;
use Logixs\Modules\Site\ViewAllPastWebinarController;
use Logixs\Modules\Site\ViewAllWebinarSeriesController;
use Logixs\Modules\User\Controllers\Auth\LoginController;
use Logixs\Modules\Site\ViewAllUpcomingWebinarController;
use Logixs\Modules\Site\Calendar\ClassCalendarIndexController;
use Logixs\Modules\Site\CertificateAuthenticationIndexController;
use Logixs\Modules\Site\CertificateAuthenticationverificationController;
use Logixs\Modules\Site\MailingList\Controllers\MailingListStoreController;
use Logixs\Modules\Site\FeedBack\Controllers\LearnerFeedBackVerificationController;
use Logixs\Modules\Site\Enrollment\Controllers\CourseClassEnrollmentIndexController;
use Logixs\Modules\Site\Enrollment\Controllers\CourseClassEnrollmentStoreController;
use Logixs\Modules\Site\Enrollment\Controllers\CourseClassEnrollmentCreateController;
use App\Http\Controllers\Site\CorporatePartnership\CorporatePartnershipIndexController;
use App\Http\Controllers\Site\CorporatePartnership\CorporatePartnershipStoreController;
use Logixs\Modules\Site\WebinarRegistrationForm\Controllers\WebinarRegistrationFormIndex;
use Logixs\Modules\Site\WebinarRegistrationForm\Controllers\WebinarRegistrationFormStore;
use Logixs\Modules\Site\CourseLearnerFeedBack\Controllers\CourseLearnerFeedBackStoreController;
use App\Http\Controllers\Site\BecomeAnInstructor\Controllers\BecomeAnInstructorIndexController;
use App\Http\Controllers\Site\BecomeAnInstructor\Controllers\BecomeAnInstructorStoreController;

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
Route::get('site/course/{id}/verify-certificate', [\Logixs\Modules\Site\VerifyCertificateController::class, 'form'])->name('site.verify-certificate.form');
Route::post('site/course/{id}/verify-certificate', [\Logixs\Modules\Site\VerifyCertificateController::class, 'verify'])->name('site.verify-certificate.verify');

//course-learner-feedback
Route::get('site/course/{id}/learner-feedback', LearnerFeedBackVerificationController::class)->name('site.learner-feedback.form');
Route::post('site/course/{id}/learner-feedback/store', CourseLearnerFeedBackStoreController::class)->name('site.learner-feedback.store');

//webinar-registration-form
Route::get('site/webinar-registration-form', WebinarRegistrationFormIndex::class)->name('site.webinar-registration-form');
Route::post('site/webinar-registration-form-store', WebinarRegistrationFormStore::class)->name('site.webinar-registration-form.store');

//Get updates on new courses.
Route::post('site/mailing-list', MailingListStoreController::class)->name('site.mailing-list.store');

Route::get('site/event-show', \App\Http\Controllers\Site\Event\EventShowController::class)->name('site.event-show');
Route::get('site/event/{id}/detail', \App\Http\Controllers\Site\Event\EventDetailController::class)->name('site.event-detail');

Route::get('site/news-show', \App\Http\Controllers\Site\News\NewsShowController::class)->name('site.news-show');
Route::get('site/news/{id}/detail', \App\Http\Controllers\Site\News\NewsDetailController::class)->name('site.news-detail');


require __DIR__ . '/pages.php';
require __DIR__ . '/admin.php';


