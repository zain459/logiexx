<?php

namespace Logixs\Modules\Site;

use App\Query\Course\GetFeaturedCourses;
use Carbon\Carbon;
use Logixs\Modules\Course\Models\Course;
use Logixs\Modules\Event\Models\Event;
use Logixs\Modules\Instructor\Models\Instructor;
use Logixs\Modules\Inventory\Class\GetCourseFeature;
use Logixs\Modules\Inventory\Model\SubjectArea;
use Logixs\Modules\News\Models\News;
use Logixs\Modules\Partner\Models\Partner;
use Logixs\Modules\Site\Enrollment\Models\Enrollment;
use Logixs\Modules\Testimonial\Models\Testimonial;
use Logixs\Modules\Webinar\Models\Webinar;

class HomeIndexController
{
    public function __invoke()
    {
        $partners = Partner::all();
        $new = News::latest()->first();
        $totalCourses = Course::count();
        $event = Event::latest()->first();
        $totalPartners = Partner::count();
        $subjectFields = SubjectArea::all();
        $totalEnrollments = Enrollment::count();
        $totalInstructors = Instructor::count();
        $testimonials = Testimonial::limit(3)->get();
//        $courseFeatures = CourseFeature::with(['feature', 'course'])->get();
        $courses = Course::with(['category'])->limit(3)->get();
        $webinar = Webinar::where('start_date', '>=', Carbon::now()->format('Y-m-d'))->first();
        $startingSoon = Course::with(['category'])->where('course_start_date', '>=', Carbon::now())->get();

        $featuredPopularCourses = GetFeaturedCourses::popular();
        $featuredTrendingCourses = GetFeaturedCourses::trending();

        dd($featuredPopularCourses, $featuredTrendingCourses);

        return view('site.index', [
            'new' => $new,
            'event' => $event,
            'webinar' => $webinar,
            'courses' => $courses,
            'partners' => $partners,
            'startingSoon' => $startingSoon,
            'testimonials' => $testimonials,
            'totalCourses' => $totalCourses,
            'totalPartners' => $totalPartners,
            'subjectFields' => $subjectFields,
//            'courseFeatures' =>$courseFeatures,
            'totalEnrollments' => $totalEnrollments,
            'totalInstructors' => $totalInstructors,
        ]);
    }
}
