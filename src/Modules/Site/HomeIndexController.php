<?php

namespace Logixs\Modules\Site;

use App\Models\OrganizationTrust\OrganizationTrust;
use App\Models\SubjectArea\Partner\Partner;
use App\Models\SubjectArea\SubjectArea;
use App\Query\Course\GetFeaturedCourses;
use Carbon\Carbon;
use Logixs\Modules\Course\Models\Course;
use Logixs\Modules\Event\Models\Event;
use Logixs\Modules\Instructor\Models\Instructor;
use Logixs\Modules\Inventory\Class\GetCourseFeature;
use Logixs\Modules\News\Models\News;
use Logixs\Modules\Site\Enrollment\Models\Enrollment;
use Logixs\Modules\Site\WebinarRegistrationForm\Models\WebinarRegistrationForm;
use Logixs\Modules\Testimonial\Models\Testimonial;
use Logixs\Modules\Webinar\Models\Webinar;

class HomeIndexController
{
    public function __invoke()
    {
        $organizationTrusts = OrganizationTrust::all();
        $news = News::orderBy('posted_date', 'desc')->limit('2')->get();
        $totalCourses = Course::count();
        $events = Event::orderBy('start_date', 'desc')->limit('2')->get();
        $totalPartners = Partner::count();
        $subjectFields = SubjectArea::all();
        $totalEnrollments = Enrollment::count();
        $totalInstructors = Instructor::count();
        $testimonials = Testimonial::limit(3)->orderBy('id', 'desc')->get();
        $featuredPopularCourses = GetFeaturedCourses::popular();
        $featuredTrendingCourses = GetFeaturedCourses::trending();
        $courses = Course::with(['category'])->get();
        $featuresEditorPickCourses = GetFeaturedCourses::editorPick();
        $webinarRegistration = WebinarRegistrationForm::where('status', 1)->count();
        $webinar = Webinar::where('start_date', '>=', Carbon::now()->format('Y-m-d'))->orWhere('end_date', '>=', Carbon::now()->format('Y-m-d'))->orderBy('id', 'desc')->first();
        $startingSoon = Course::with(['category'])->where('course_start_date', '>', Carbon::now())->get();

        return view('site.index', [
            'news' => $news,
            'events' => $events,
            'webinar' => $webinar,
            'courses' => $courses,
            'organizationTrusts' => $organizationTrusts,
            'startingSoon' => $startingSoon,
            'testimonials' => $testimonials,
            'totalCourses' => $totalCourses,
            'totalPartners' => $totalPartners,
            'subjectFields' => $subjectFields,
            'totalEnrollments' => $totalEnrollments,
            'totalInstructors' => $totalInstructors,
            'webinarRegistration' => $webinarRegistration,
            'featuredPopularCourses' => $featuredPopularCourses,
            'featuredTrendingCourses' => $featuredTrendingCourses,
            'featuresEditorPickCourses' => $featuresEditorPickCourses,
        ]);
    }
}
