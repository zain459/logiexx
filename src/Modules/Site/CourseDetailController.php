<?php

namespace Logixs\Modules\Site;

use Logixs\Modules\Pages\Models\Pages;
use Logixs\Modules\Course\Models\Course;
use Logixs\Modules\Course\Models\Feedback;
use Logixs\Modules\Partner\Models\Partner;
use Logixs\Modules\Inventory\Model\SubjectArea;
use Logixs\Modules\Instructor\Models\Instructor;
use Logixs\Modules\Course\Models\CourseInstructor;
use Logixs\Modules\Course\Models\CourseLearningObjective;

class CourseDetailController
{
    public function __invoke(int $id)
    {
        $pages = Pages::first();
        $partners = Partner::all();
        $instructors = Instructor::all();
        $totalPartners = Partner::count();
        $subjectFields = SubjectArea::all();
        $courses = Course::with(['subjectArea'])->get();
        $courseFeedbacks = Feedback::with(['course'])->get();
        $courseInstructors = CourseInstructor::with(['instructor'])->get();
        $specific = Course::with(['category'])->where('id', $id)->first();
        $courseLearningObjectives = CourseLearningObjective::with('course')->where('course_id', $id)->get();

        return view('site.course-detail', [
            'pages' => $pages,
            'courses' => $courses,
            'partners' => $partners,
            'specific' => $specific,
            'instructors' => $instructors,
            'totalPartners' => $totalPartners,
            'subjectFields' => $subjectFields,
            'courseFeedbacks' => $courseFeedbacks,
            'courseInstructors' => $courseInstructors,
            'courseLearningObjectives' => $courseLearningObjectives,
        ]);
    }
}
