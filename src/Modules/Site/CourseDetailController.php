<?php

namespace Logixs\Modules\Site;

use App\Models\SubjectArea\Partner\Partner;
use App\Models\SubjectArea\SubjectArea;
use Logixs\Modules\Course\Models\Course;
use Logixs\Modules\Course\Models\CourseInstructor;
use Logixs\Modules\Course\Models\CourseLearningObjective;
use Logixs\Modules\Course\Models\CoursePartner;
use Logixs\Modules\Course\Models\Feedback;
use Logixs\Modules\Instructor\Models\Instructor;
use Logixs\Modules\Pages\Models\Pages;
use Logixs\Modules\Site\CourseLearnerFeedBack\Models\InstructorLearnerFeedBack;

class CourseDetailController
{
    public function __invoke(int $id)
    {
        $courseEnrollment = Course::findOrFail($id);
        $pages = Pages::first();
        $instructors = Instructor::all();
        $totalPartners = Partner::count();
        $subjectFields = SubjectArea::all();
        $courseFeedbacks = Feedback::with(['course'])->get();
        $otherCourses = Course::with(['category'])->limit(3)->get();
        $courseInstructors = CourseInstructor::with(['instructor'])->where('course_id', $id)->get();
        $courses = Course::with(['subjectArea'])->where('id', $id)->get();
        $specific = Course::with(['category'])->where('id', $id)->first();
        $coursePartners = CoursePartner::with(['partner'])->where('course_id', $id)->get();
        $courseLearningObjectives = CourseLearningObjective::with('course')->where('course_id', $id)->get();

        return view('site.course-detail', [
            'pages' => $pages,
            'courses' => $courses,
            'specific' => $specific,
            'instructors' => $instructors,
            'otherCourses' => $otherCourses,
            'subjectFields' => $subjectFields,
            'totalPartners' => $totalPartners,
            'coursePartners' => $coursePartners,
            'courseFeedbacks' => $courseFeedbacks,
            'courseInstructors' => $courseInstructors,
            'courseEnrollment' => $courseEnrollment,
            'courseLearningObjectives' => $courseLearningObjectives,
        ]);
    }
}
