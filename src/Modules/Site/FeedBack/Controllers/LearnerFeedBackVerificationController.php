<?php

namespace Logixs\Modules\Site\FeedBack\Controllers;

use App\Models\SubjectArea\SubjectArea;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Logixs\Modules\Course\Models\Course;
use Logixs\Modules\Course\Models\CourseClass;
use Logixs\Modules\Course\Models\CourseInstructor;
use App\Models\Certificate\CertificateAuthentication;
use App\Models\CourseFeedBackParams\CourseFeedBackParams;
use Logixs\Modules\Site\CourseLearnerFeedBack\Models\CourseLearnerFeedBack;
use Logixs\Modules\Site\CourseLearnerFeedBack\Models\InstructorLearnerFeedBack;

class LearnerFeedBackVerificationController extends Controller
{
    public function __invoke(Request $request, int $id)
    {
        $course = Course::query()->findOrFail($id);

        $courseInstructors = CourseInstructor::query()->with('instructor')
            ->where('course_id', (int)$course->id())->get();

        $courseFeedbackParams = CourseFeedBackParams::with('feedbackParam')
            ->where('course_id', $course->id())
            ->where('type', 'Course')->get();

        $instructorFeedbackParams = CourseFeedBackParams::with('feedbackParam')
            ->where('course_id', $course->id())
            ->where('type', lcfirst('Instructor'))->get();

        $verified = CertificateAuthentication::query()->findOrFail($request->get('verified'));
//
        $courseLearnerFeedBackCheck = CourseLearnerFeedBack::query()
            ->where('student_id', (int)$verified?->id())->first();

        $instructorLearnerFeedBackCheck = InstructorLearnerFeedBack::query()
            ->where('student_id', (int)$verified?->id())->first();

        $subjectFields = SubjectArea::all();

        return view('site.learner-feedback', [
            'course' => $course,
            'verified' => $verified,
            'subjectFields' => $subjectFields,
            'courseInstructors' => $courseInstructors,
            'courseFeedbackParams' => $courseFeedbackParams,
            'instructorFeedbackParams' => $instructorFeedbackParams,
            'courseLearnerFeedBackCheck' => $courseLearnerFeedBackCheck,
            'instructorLearnerFeedBackCheck' => $instructorLearnerFeedBackCheck
        ]);
    }
}
