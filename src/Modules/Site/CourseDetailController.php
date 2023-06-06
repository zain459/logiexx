<?php

namespace Logixs\Modules\Site;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Logixs\Modules\Course\Models\CoreFeatureSection;
use Logixs\Modules\Pages\Models\Pages;
use App\Models\SubjectArea\SubjectArea;
use Logixs\Modules\Course\Models\Course;
use Logixs\Modules\Course\Models\Feedback;
use App\Models\SubjectArea\Partner\Partner;
use Logixs\Modules\Course\Models\CoursePartner;
use Logixs\Modules\Instructor\Models\Instructor;
use Logixs\Modules\Course\Models\CourseInstructor;
use Logixs\Modules\Course\Models\CourseLearningObjective;
use Logixs\Modules\Site\CourseLearnerFeedBack\Models\CourseLearnerFeedBack;
use Logixs\Modules\Site\CourseLearnerFeedBack\Models\InstructorLearnerFeedBack;
use Logixs\Modules\Site\Enrollment\Models\Enrollment;

class CourseDetailController
{
    public function __invoke(int $id)
    {
        $course = Course::findOrFail($id);
        $pages = Pages::query()->first();
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
        $instructorsFeedback = DB::table('instructor_feedbacks')
            ->select(['instructor_id', DB::raw('SUM(instructor_quality_of_course)/count(*) as feedback')])
            ->groupBy('instructor_id')
            ->get()
            ->mapWithKeys(function ($item) {
                return [$item->instructor_id => number_format($item->feedback, 1, '.', '')];
            });

        $instructorsReview = DB::table('instructor_feedbacks')
            ->select(['instructor_id', DB::raw('count(instructor_id) as reviews')])
            ->groupBy('instructor_id')
            ->get()
            ->mapWithKeys(function ($item) {
                return [$item->instructor_id => $item->reviews];
            });

        $instructorsStudent = DB::table('instructor_feedbacks')
            ->select(['instructor_id', 'course_id', DB::raw('count(student_id) as totalStudent')])
            ->groupBy('instructor_id', 'course_id')
            ->get()
            ->mapWithKeys(function ($item) {
                return [$item->instructor_id => $item->totalStudent];
            });
        $totalCourseFeedback = CourseLearnerFeedBack::where('course_id', $specific->id())->count('student_id');
        $coreFeatures = CoreFeatureSection::query()->where('course_id', $id)->get();


        $enrollmentCount = Enrollment::query()
            ->leftJoin('classes', 'classes.id', 'enrollments.class_id')
            ->where('classes.course_id', $course->id())
            ->count();

        return view('site.course-detail', [
            'pages' => $pages,
            'courses' => $courses,
            'specific' => $specific,
            'instructors' => $instructors,
            'coreFeatures' => $coreFeatures,
            'otherCourses' => $otherCourses,
            'subjectFields' => $subjectFields,
            'totalPartners' => $totalPartners,
            'coursePartners' => $coursePartners,
            'courseFeedbacks' => $courseFeedbacks,
            'enrollmentCount' => $enrollmentCount,
            'courseInstructors' => $courseInstructors,
            'instructorsReview' => $instructorsReview,
            'instructorsStudent' => $instructorsStudent,
            'instructorsFeedback' => $instructorsFeedback,
            'totalCourseFeedback' => $totalCourseFeedback,
            'courseLearningObjectives' => $courseLearningObjectives,
        ]);
    }

}
