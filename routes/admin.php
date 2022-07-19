<?php

use App\Http\Controllers\Admin\FeedBack\FeedBackController;
use App\Http\Controllers\Admin\FeedBack\FeedBackUpdateController;
use App\Http\Controllers\Admin\FeedBack\FeedBackStoreController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\Partner\PartnerIndexController;
use App\Http\Controllers\Admin\Partner\PartnerStoreController;
use App\Http\Controllers\Admin\Partner\PartnerUpdateController;
use App\Http\Controllers\Admin\CourseClass\ClassEditController;
use App\Http\Controllers\Admin\Category\CategoryIndexController;
use App\Http\Controllers\Admin\Category\CategoryStoreController;
use App\Http\Controllers\Admin\CourseClass\ClassIndexController;
use App\Http\Controllers\Admin\CourseClass\ClassStoreController;
use App\Http\Controllers\Admin\Category\CategoryUpdateController;
use App\Http\Controllers\Admin\CourseClass\ClassCreateController;
use App\Http\Controllers\Admin\CourseClass\ClassDeleteController;
use App\Http\Controllers\Admin\CourseClass\ClassUpdateController;
use App\Http\Controllers\Admin\Setting\SettingDashboardController;
use App\Http\Controllers\Admin\SubjectArea\SubjectAreaIndexController;
use App\Http\Controllers\Admin\SubjectArea\SubjectAreaStoreController;
use App\Http\Controllers\Admin\SubjectArea\SubjectAreaUpdateController;
use App\Http\Controllers\Admin\Certificate\VerifyCertificateController;
use Logixs\Modules\WebinarRegistration\Controllers\WebinarRegistrationIndex;
use App\Http\Controllers\Admin\Certificate\VerifyCertificateEditController;
use App\Http\Controllers\Admin\FeaturedCourse\FeaturedCourseIndexController;
use App\Http\Controllers\Admin\FeaturedCourse\FeaturedCourseStoreController;
use App\Http\Controllers\Admin\Certificate\VerifyCertificateStoreController;
use App\Http\Controllers\Admin\Certificate\VerifyCertificateCreateController;
use App\Http\Controllers\Admin\FeaturedCourse\FeaturedCourseDeleteController;
use App\Http\Controllers\Admin\Certificate\VerifyCertificateDeleteController;
use App\Http\Controllers\Admin\Certificate\VerifyCertificateUpdateController;
use App\Http\Controllers\Admin\BecomeAnInstructor\BecomeAnInstructorViewController;
use App\Http\Controllers\Admin\BecomeAnInstructor\BecomeAnInstructorIndexController;
use Logixs\Modules\WebinarRegistration\Controllers\WebinarRegistrationViewController;
use App\Http\Controllers\Admin\BecomeAnInstructor\BecomeAnInstructorDeleteController;
use App\Http\Controllers\Admin\BecomeAnInstructor\BecomeAnInstructorDownloadController;
use Logixs\Modules\WebinarRegistration\Controllers\WebinarRegistrationDeleteController;
use App\Http\Controllers\Admin\CorporatePartnership\CorporatePartnershipViewController;
use App\Http\Controllers\Admin\CorporatePartnership\CorporatePartnershipIndexController;
use App\Http\Controllers\Admin\CorporatePartnership\CorporatePartnershipDeleteController;
use Logixs\Modules\WebinarRegistration\Controllers\WebinarRegistrationStatusStoreController;

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
    Route::get('partners', PartnerIndexController::class)->name('admin.partner.index');
    Route::post('partner/store', PartnerStoreController::class)->name('admin.partner.store');
    Route::post('partner/update', PartnerUpdateController::class)->name('admin.partner.update');

    //classes
    Route::get('course/{id}/class', ClassIndexController::class)->name('admin.course-class.index');
    Route::get('course/{id}/class/create', ClassCreateController::class)->name('admin.course-class.create');
    Route::post('course/{id}/class/store', ClassStoreController::class)->name('admin.course-class.store');
    Route::get('course-class/{id}/edit', ClassEditController::class)->name('admin.course-class.edit');
    Route::post('course/{id}/class/delete', ClassDeleteController::class)->name('admin.course-class.delete');
    Route::post('course-class/{id}/update', ClassUpdateController::class)->name('admin.course-class.update');

    //Certificate
    Route::get('class/{id}/verify-certificate', VerifyCertificateController::class)->name('admin.verify-certificate.index');
    Route::get('class/{id}/verify-certificate/create', VerifyCertificateCreateController::class)->name('admin.verify-certificate.create');
    Route::post('class/{id}/verify-certificate/store', VerifyCertificateStoreController::class)->name('admin.verify-certificate.store');
    Route::get('class/verify-certificate/{id}/edit', VerifyCertificateEditController::class)->name('admin.verify-certificate.edit');
    Route::post('class/verify-certificate/{id}/update', VerifyCertificateUpdateController::class)->name('admin.verify-certificate.update');
    Route::post('class/verify-certificate/{id}/Delete', VerifyCertificateDeleteController::class)->name('admin.verify-certificate.delete');

    //setting
    Route::get('settings', SettingDashboardController::class)->name('admin.setting.dashboard');

    //Corporate Partnership
    Route::get('corporate-partnership', CorporatePartnershipIndexController::class)->name('admin.corporate-partnership.index');
    Route::post('corporate-partnership/{id}/delete', CorporatePartnershipDeleteController::class)->name('admin.corporate-partnership.delete');
    Route::get('corporate-partnership/{id}/view', CorporatePartnershipViewController::class)->name('admin.corporate-partnership.view');

    //Become An Instructor
    Route::get('become-an-instructor', BecomeAnInstructorIndexController::class)->name('admin.become-an-instructor.index');
    Route::post('become-an-instructor/{id}/delete', BecomeAnInstructorDeleteController::class)->name('admin.become-an-instructor.delete');
    Route::get('become-an-instructor/{id}/view', BecomeAnInstructorViewController::class)->name('admin.become-an-instructor.view');
    Route::get('become-an-instructor/{id}/download', BecomeAnInstructorDownloadController::class)->name('admin.become-an-instructor.download');

    //Webinar Registration
    Route::get('webinar-registration', WebinarRegistrationIndex::class)->name('admin.webinar-registration.index');
    Route::get('webinar-registration/{id}/view', WebinarRegistrationViewController::class)->name('admin.webinar-registration.view');
    Route::post('webinar-registration-status/{id}/store', WebinarRegistrationStatusStoreController::class)->name('admin.webinar-registration-status.store');
    Route::post('webinar-registration/{id}/delete', WebinarRegistrationDeleteController::class)->name('admin.webinar-registration.delete');

    //FeedBack
    Route::get('feed-back', FeedBackController::class)->name('admin.feed-back.index');
    Route::post('feed-back/store', FeedBackStoreController::class)->name('admin.feed-back.store');
    Route::post('feed-back/{id}/store', FeedBackUpdateController::class)->name('admin.feed-back.update');
});
