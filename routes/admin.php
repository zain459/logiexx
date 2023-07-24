<?php

use Illuminate\Support\Facades\Route;
use Logixs\Modules\News\Controllers\NewsEditController;
use Logixs\Modules\News\Controllers\NewsIndexController;
use Logixs\Modules\News\Controllers\NewsStoreController;
use App\Http\Controllers\Admin\AdminDashboardController;
use Logixs\Modules\News\Controllers\NewsCreateController;
use Logixs\Modules\News\Controllers\NewsDeleteController;
use Logixs\Modules\News\Controllers\NewsUpdateController;
use Logixs\Modules\Event\Controllers\EventEditController;
use Logixs\Modules\Event\Controllers\EventIndexController;
use Logixs\Modules\Event\Controllers\EventStoreController;
use Logixs\Modules\Event\Controllers\EventUpdateController;
use Logixs\Modules\Event\Controllers\EventCreateController;
use Logixs\Modules\Event\Controllers\EventDeleteController;
use Logixs\Modules\Course\Controllers\CourseEditController;
use Logixs\Modules\Course\Controllers\CourseIndexController;
use Logixs\Modules\Course\Controllers\CourseStoreController;
use Logixs\Modules\Course\Controllers\CourseCreateController;
use Logixs\Modules\Webinar\Controllers\WebinarEditController;
use Logixs\Modules\Course\Controllers\CourseUpdateController;
use App\Http\Controllers\Admin\Partner\PartnerIndexController;
use App\Http\Controllers\Admin\Partner\PartnerStoreController;
use Logixs\Modules\Course\Controllers\FeedbackStoreController;
use Logixs\Modules\Course\Controllers\FeedbackIndexController;
use Logixs\Modules\Webinar\Controllers\WebinarIndexController;
use Logixs\Modules\Webinar\Controllers\WebinarStoreController;
use Logixs\Modules\Course\Controllers\FeedbackDeleteController;
use Logixs\Modules\Webinar\Controllers\WebinarUpdateController;
use Logixs\Modules\Webinar\Controllers\WebniarCreateController;
use Logixs\Modules\Course\Controllers\FeedbackUpdateController;
use App\Http\Controllers\Admin\Partner\PartnerUpdateController;
use App\Http\Controllers\Admin\CourseClass\ClassEditController;
use Logixs\Modules\Course\Controllers\EnrollmentViewController;
use Logixs\Modules\Webinar\Controllers\WebinarDeleteController;
use App\Http\Controllers\Admin\Category\CategoryIndexController;
use App\Http\Controllers\Admin\Category\CategoryStoreController;
use Logixs\Modules\Course\Controllers\EnrollmentIndexController;
use App\Http\Controllers\Admin\CourseClass\ClassIndexController;
use App\Http\Controllers\Admin\CourseClass\ClassStoreController;
use App\Http\Controllers\Admin\Category\CategoryUpdateController;
use App\Http\Controllers\Admin\CourseClass\ClassCreateController;
use App\Http\Controllers\Admin\CourseClass\ClassDeleteController;
use App\Http\Controllers\Admin\CourseClass\ClassUpdateController;
use Logixs\Modules\Course\Controllers\EnrollmentDeleteController;
use App\Http\Controllers\Admin\Setting\SettingDashboardController;
use Logixs\Modules\Course\Controllers\CoursePartnerIndexController;
use Logixs\Modules\Course\Controllers\CoreFeatureSectionController;
use Logixs\Modules\Course\Controllers\CoursePartnerStoreController;
use Logixs\Modules\Instructor\Controllers\InstructorStoreController;
use Logixs\Modules\Instructor\Controllers\InstructorIndexController;
use Logixs\Modules\Course\Controllers\CoursePartnerDeleteController;
use Logixs\Modules\Course\Controllers\CourseOtherInfoEditController;
use Logixs\Modules\Course\Controllers\CourseOtherInfoIndexController;
use Logixs\Modules\Course\Controllers\CourseOtherInfoStoreController;
use Logixs\Modules\Instructor\Controllers\InstructorDeleteController;
use Logixs\Modules\Instructor\Controllers\InstructorUpdateController;
use Logixs\Modules\Testimonial\Controllers\TestimonialEditController;
use Logixs\Modules\Course\Controllers\CourseInstructorIndexController;
use Logixs\Modules\Course\Controllers\CourseOtherInfoUpdateController;
use Logixs\Modules\Course\Controllers\CourseOtherInfoCreateController;
use Logixs\Modules\Course\Controllers\CourseOtherInfoDeleteController;
use App\Http\Controllers\Admin\SubjectArea\SubjectAreaIndexController;
use App\Http\Controllers\Admin\SubjectArea\SubjectAreaStoreController;
use Logixs\Modules\Testimonial\Controllers\TestimonialIndexController;
use Logixs\Modules\Testimonial\Controllers\TestimonialStoreController;
use Logixs\Modules\Testimonial\Controllers\TestimonialUpdateController;
use Logixs\Modules\Testimonial\Controllers\TestimonialCreateController;
use Logixs\Modules\Testimonial\Controllers\TestimonialDeleteController;
use App\Http\Controllers\Admin\SubjectArea\SubjectAreaUpdateController;
use Logixs\Modules\Course\Controllers\CourseInstructorAssignController;
use Logixs\Modules\Course\Controllers\CourseInstructorDeleteController;
use Logixs\Modules\Course\Controllers\CoreFeatureSectionEditController;
use App\Http\Controllers\Admin\Certificate\VerifyCertificateController;
use App\Http\Controllers\Admin\FeedBackParams\FeedBackParamsController;
use App\Http\Controllers\Admin\SubjectArea\SubjectAreaDeleteController;
use Logixs\Modules\Course\Controllers\CoreFeatureSectionStoreController;
use Logixs\Modules\Course\Controllers\CourseLearningObjectiveController;
use Logixs\Modules\Course\Controllers\CoreFeatureSectionCreateController;
use Logixs\Modules\Course\Controllers\CoreFeatureSectionUpdateController;
use Logixs\Modules\Course\Controllers\CoreFeatureSectionDeleteController;
use App\Http\Controllers\Admin\Certificate\VerifyCertificateEditController;
use App\Http\Controllers\Admin\RegistrationForm\RegistrationViewController;
use App\Http\Controllers\Admin\Certificate\VerifyCertificateStoreController;
use Logixs\Modules\WebinarRegistration\Controllers\WebinarRegistrationIndex;
use Logixs\Modules\Course\Controllers\CourseLearningObjectiveEditController;
use App\Http\Controllers\Admin\FeedBackParams\FeedBackParamsStoreController;
use App\Http\Controllers\Admin\FeaturedCourse\FeaturedCourseIndexController;
use App\Http\Controllers\Admin\RegistrationForm\RegistrationStoreController;
use App\Http\Controllers\Admin\RegistrationForm\RegistrationIndexController;
use App\Http\Controllers\Admin\FeaturedCourse\FeaturedCourseStoreController;
use App\Http\Controllers\Admin\RegistrationForm\RegistrationCreateController;
use App\Http\Controllers\Admin\Certificate\VerifyCertificateCreateController;
use App\Http\Controllers\Admin\FeaturedCourse\FeaturedCourseDeleteController;
use App\Http\Controllers\Admin\Certificate\VerifyCertificateDeleteController;
use App\Http\Controllers\Admin\Certificate\VerifyCertificateUpdateController;
use Logixs\Modules\Course\Controllers\CourseLearningObjectiveStoreController;
use App\Http\Controllers\Admin\FeedBackParams\FeedBackParamsUpdateController;
use App\Http\Controllers\Admin\FeedBackParams\FeedBackParamsDeleteController;
use Logixs\Modules\Course\Controllers\CourseLearningObjectiveUpdateController;
use Logixs\Modules\Course\Controllers\CourseLearningObjectiveCreateController;
use Logixs\Modules\Course\Controllers\CourseLearningObjectiveDeleteController;
use App\Http\Controllers\Admin\OrganizationTrust\OrganizationTrustStoreController;
use App\Http\Controllers\Admin\OrganizationTrust\OrganizationTrustIndexController;
use App\Http\Controllers\Admin\OrganizationTrust\OrganizationTrustDeleteController;
use App\Http\Controllers\Admin\OrganizationTrust\OrganizationTrustUpdateController;
use App\Http\Controllers\Admin\BecomeAnInstructor\BecomeAnInstructorViewController;
use App\Http\Controllers\Admin\BecomeAnInstructor\BecomeAnInstructorIndexController;
use Logixs\Modules\WebinarRegistration\Controllers\WebinarRegistrationViewController;
use App\Http\Controllers\Admin\BecomeAnInstructor\BecomeAnInstructorDeleteController;
use App\Http\Controllers\Admin\BecomeAnInstructor\BecomeAnInstructorDownloadController;
use Logixs\Modules\WebinarRegistration\Controllers\WebinarRegistrationDeleteController;
use App\Http\Controllers\Admin\CorporatePartnership\CorporatePartnershipViewController;
use App\Http\Controllers\Admin\CourseFeedBackParams\CourseFeedBackParamsStoreController;
use App\Http\Controllers\Admin\CorporatePartnership\CorporatePartnershipIndexController;
use App\Http\Controllers\Admin\CourseFeedBackParams\CourseFeedBackParamsIndexController;
use App\Http\Controllers\Admin\CourseFeedBackParams\CourseFeedBackParamsDeleteController;
use App\Http\Controllers\Admin\CorporatePartnership\CorporatePartnershipDeleteController;
use Logixs\Modules\WebinarRegistration\Controllers\WebinarRegistrationStatusStoreController;
use Logixs\Modules\Site\CourseLearnerFeedBack\Controllers\CourseLearnerFeedBackStoreController;

Route::prefix('admin')->middleware(['auth'])->group(function () {

    // dashboard
    Route::get('dashboard', AdminDashboardController::class)->name('admin.dashboard');

    //course
    Route::get('courses', CourseIndexController::class)->name('course-index');
    Route::get('course/create', CourseCreateController::class)->name('course-create');
    Route::post('course/store', CourseStoreController::class)->name('course-store');
    Route::get('course/{id}/edit', CourseEditController::class)->name('course-edit');
    Route::post('course/{id}/update', CourseUpdateController::class)->name('course-update');

    //other info
    Route::get('course/{id}/other-details', CourseOtherInfoIndexController::class)->name('course.other-info');
    Route::get('course/{id}/other-details/create', CourseOtherInfoCreateController::class)->name('course.other-info-create');
    Route::post('course/other-details/store', CourseOtherInfoStoreController::class)->name('course.other-info-store');
    Route::post('course/other-details/{id}/delete', CourseOtherInfoDeleteController::class)->name('course.other-info-delete');
    Route::get('course/other-details/{id}/edit', CourseOtherInfoEditController::class)->name('course.other-info-edit');
    Route::post('course/other-details/{id}/update', CourseOtherInfoUpdateController::class)->name('course.other-info-update');

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
    Route::post('subject-areas/{id}/delete', SubjectAreaDeleteController::class)->name('admin.subject-area.delete');

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

    //FeedBackParams
    Route::get('feedback-params', FeedBackParamsController::class)->name('admin.feed-back.index');
    Route::post('feedback-params/store', FeedBackParamsStoreController::class)->name('admin.feed-back.store');
    Route::post('feedback-params/{id}/delete', FeedBackParamsDeleteController::class)->name('admin.feed-back.delete');
    Route::post('feedback-params/{id}/update', FeedBackParamsUpdateController::class)->name('admin.feed-back.update');

    //CourseFeedBackParams
    Route::get('course/{id}/feedback-params', CourseFeedBackParamsIndexController::class)->name('admin.course.feedback-params');
    Route::post('course-feedback-params/store', CourseFeedBackParamsStoreController::class)->name('admin.course-feed-back-params.store');
    Route::post('course-feedback-params/{id}/store', CourseFeedBackParamsDeleteController::class)->name('admin.course-feed-back-params.delete');

    //enrollment
    Route::get('class/{id}/enrollment', EnrollmentIndexController::class)->name('course.enrollment-index');
    Route::post('enrollment/{id}/delete', EnrollmentDeleteController::class)->name('course.enrollment-delete');
    Route::get('enrollment/{id}/view', EnrollmentViewController::class)->name('course.enrollment-view');

    //registration
    Route::get('class/{id}/registration', RegistrationIndexController::class)->name('course-class.registration.index');
    Route::get('class/{id}/registration-create', RegistrationCreateController::class)->name('course-class.registration.create');
    Route::post('registration-store', RegistrationStoreController::class)->name('course-class.registration.store');
    Route::get('registration/{id}/view', RegistrationViewController::class)->name('course-class.registration.view');

    //enrollment status
    Route::post('enrollment-status/{id}/store', \Logixs\Modules\Course\Controllers\EnrollmentStatusStore::class)->name('course.enrollment-status-store');

    //Certificate
    Route::get('enrollment/{id}/certificate-create', VerifyCertificateCreateController::class)->name('admin.verify-certificate.create');
    Route::post('enrollment/{id}/certificate-store', VerifyCertificateStoreController::class)->name('admin.verify-certificate.store');
    Route::get('class/verify-certificate/{id}/edit', VerifyCertificateEditController::class)->name('admin.verify-certificate.edit');
    Route::post('class/verify-certificate/{id}/update', VerifyCertificateUpdateController::class)->name('admin.verify-certificate.update');
    Route::post('class/verify-certificate/{id}/Delete', VerifyCertificateDeleteController::class)->name('admin.verify-certificate.delete');

    //course learning objective
    Route::get('course/{id}/learning-objective', CourseLearningObjectiveController::class)->name('course.learning-objective-index');
    Route::get('course/{id}/learning-objective-create', CourseLearningObjectiveCreateController::class)->name('course.learning-objective-create');
    Route::get('learning-objective/{id}/edit', CourseLearningObjectiveEditController::class)->name('course.learning-objective-edit');
    Route::post('learning-objective/store', CourseLearningObjectiveStoreController::class)->name('course.learning-objective-store');
    Route::post('learning-objective/{id}/update', CourseLearningObjectiveUpdateController::class)->name('course.learning-objective-update');
    Route::post('learning-objective/{id}/delete', CourseLearningObjectiveDeleteController::class)->name('course.learning-objective-delete');

    //course W-L-A
    Route::get('course/{id}/core-feature-section', CoreFeatureSectionController::class)->name('core-feature-section.index');
    Route::get('course/{id}/core-feature-section-create', CoreFeatureSectionCreateController::class)->name('core-feature-section.create');
    Route::post('core-feature-section/store', CoreFeatureSectionStoreController::class)->name('core-feature-section.store');
    Route::post('core-feature-section/{id}/delete', CoreFeatureSectionDeleteController::class)->name('core-feature-section.delete');
    Route::get('core-feature-section/{id}/edit', CoreFeatureSectionEditController::class)->name('core-feature-section-edit');
    Route::post('core-feature-section/{id}/update', CoreFeatureSectionUpdateController::class)->name('core-feature-section-update');

    //assign instructors
    Route::get('course/{id}/instructors', CourseInstructorIndexController::class)->name('course.instructors-index');
    Route::post('instructors/assign', CourseInstructorAssignController::class)->name('course.instructors-assign');
    Route::post('instructors/{id}/delete', CourseInstructorDeleteController::class)->name('course.instructors-delete');

    Route::get('course/{id}/partners', CoursePartnerIndexController::class)->name('course.partner-index');
    Route::post('partner/assign', CoursePartnerStoreController::class)->name('course.partner.assign-course');
    Route::post('partner/assign/{id}/delete', CoursePartnerDeleteController::class)->name('course.partner-delete');

    //feedback
    Route::get('course{id}/feedback', FeedbackIndexController::class)->name('course.feedback-index');
    Route::post('feedback-store', FeedbackStoreController::class)->name('course.feedback-store');
    Route::post('feedback-update', FeedbackUpdateController::class)->name('course.feedback-update');
    Route::post('feedback/{id}/delete', FeedbackDeleteController::class)->name('course.feedback-delete');

    //course featured
    Route::get('featured-courses', \App\Http\Controllers\Admin\FeaturedCourse\FeaturedCourseIndexController::class)->name('admin.featured-course.index');
    Route::post('featured-courses/store', \App\Http\Controllers\Admin\FeaturedCourse\FeaturedCourseStoreController::class)->name('admin.featured-course.store');

    //Webinar
    Route::get('webinars', WebinarIndexController::class)->name('webinar-index');
    Route::get('webinars/create', WebniarCreateController::class)->name('webinar-create');
    Route::post('webinars/store', WebinarStoreController::class)->name('webinar-store');
    Route::get('webinars/{id}/edit', WebinarEditController::class)->name('webinar-edit');
    Route::post('webinars/{id}/update', WebinarUpdateController::class)->name('webinar-update');
    Route::post('webinars/{id}/delete', WebinarDeleteController::class)->name('webinar-delete');

    // Events
    Route::get('events', EventIndexController::class)->name('event-index');
    Route::get('event/create', EventCreateController::class)->name('event-create');
    Route::post('event/store', EventStoreController::class)->name('event-store');
    Route::get('event/{id}/edit', EventEditController::class)->name('event-edit');
    Route::post('event/{id}/update', EventUpdateController::class)->name('event-update');
    Route::post('event/{id}/delete', EventDeleteController::class)->name('event-delete');

    //News
    Route::get('news', NewsIndexController::class)->name('news-index');
    Route::get('news/create', NewsCreateController::class)->name('news-create');
    Route::post('news/store', NewsStoreController::class)->name('news-store');
    Route::post('news/{id}/delete', NewsDeleteController::class)->name('news-delete');
    Route::get('news/{id}/edit', NewsEditController::class)->name('news-edit');
    Route::post('news/{id}/update', NewsUpdateController::class)->name('news-update');

    //Testimonials
    Route::get('testimonials', TestimonialIndexController::class)->name('testimonial-index');
    Route::get('testimonial/create', TestimonialCreateController::class)->name('testimonial-create');
    Route::post('testimonial/store', TestimonialStoreController::class)->name('testimonial-store');
    Route::get('testimonial/{id}/edit', TestimonialEditController::class)->name('testimonial-edit');
    Route::post('testimonial/{id}/delete', TestimonialDeleteController::class)->name('testimonial.delete');
    Route::post('testimonial/update', TestimonialUpdateController::class)->name('testimonial-update');

    //Instructors
    Route::get('instructors', InstructorIndexController::class)->name('instructor.index');
    Route::post('instructor/store', InstructorStoreController::class)->name('instructor.store');
    Route::post('instructor/{id}/delete', InstructorDeleteController::class)->name('instructor.delete');
    Route::post('instructor/{id}/update', InstructorUpdateController::class)->name('instructor.update');

    //organization trust
    Route::get('organization-trust', OrganizationTrustIndexController::class)->name('organization-trust.index');
    Route::post('organization-trust/store', OrganizationTrustStoreController::class)->name('organization-trust.store');
    Route::post('organization-trust/update', OrganizationTrustUpdateController::class)->name('organization-trust.update');
    Route::post('organization-trust/{id}/delete', OrganizationTrustDeleteController::class)->name('organization-trust.delete');
});


