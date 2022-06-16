<?php

namespace Logixs\Modules\Site;

use Carbon\Carbon;
use Logixs\Modules\News\Models\News;
use Logixs\Modules\Event\Models\Event;
use Logixs\Modules\Course\Models\Course;
use Logixs\Modules\Partner\Models\Partner;
use Logixs\Modules\Inventory\Model\SubjectArea;
use Logixs\Modules\Instructor\Models\Instructor;
use Logixs\Modules\Testimonial\Models\Testimonial;
use Logixs\Modules\Webinar\Models\Webinar;

class HomeIndexController
{
    public function __invoke()
    {
        $partners = Partner::all();
        $new = News::latest()->first();
        $toatalCourses = Course::count();
        $event = Event::latest()->first();
        $totalPartners = Partner::count();
        $testimonials = Testimonial::limit(3)->get();
        $subjectFields = SubjectArea::all();
        $webinar = Webinar::where('start_date', '>=', Carbon::now()->format('Y-m-d'))->first();
        $totalInstructors = Instructor::count();
        $courses = Course::with(['category'])->get();

        return view('site.index', [
            'new' => $new,
            'event' => $event,
            'webinar' => $webinar,
            'courses' => $courses,
            'partners' => $partners,
            'testimonials' => $testimonials,
            'subjectFields' => $subjectFields,
            'toatalCourses' => $toatalCourses,
            'totalPartners' => $totalPartners,
            'totalInstructors' => $totalInstructors,
        ]);
    }
}
