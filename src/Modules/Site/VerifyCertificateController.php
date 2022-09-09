<?php

namespace Logixs\Modules\Site;

use App\Http\Controllers\Controller;
use App\Models\Certificate\CertificateAuthentication;
use App\Models\CourseFeedBackParams\CourseFeedBackParams;
use App\Models\SubjectArea\SubjectArea;
use Illuminate\Http\Request;
use Logixs\Modules\Course\Models\Course;
use Logixs\Modules\Course\Models\CourseInstructor;
use Logixs\Modules\Site\CourseLearnerFeedBack\Models\CourseLearnerFeedBack;
use Logixs\Modules\Site\CourseLearnerFeedBack\Models\InstructorLearnerFeedBack;

class VerifyCertificateController extends Controller
{
    public function form(int $id)
    {
        $course = Course::query()->findOrFail($id);
        $subjectFields = SubjectArea::all();

        return view('site.feedback-verification', [
            'course' => $course,
            'subjectFields' => $subjectFields
        ]);
    }

    public function verify(Request $request, int $id)
    {
        $data = $this->validate($request, [
            'name' => ['required', 'string'],
            'certificate_serial_number' => ['required', 'string'],
        ]);

        $course = Course::query()->findOrFail($id);

        $verified = CertificateAuthentication::query()
            ->where('name', (string)$data['name'])
            ->where('certificate', (string)$data['certificate_serial_number'])
            ->where('course_id', $course)
            ->first();

        $courseLearnerFeedBackCheck = CourseLearnerFeedBack::query()
            ->where('student_id', (int)$verified?->id())->first();

        $instructorLearnerFeedBackCheck = InstructorLearnerFeedBack::query()
            ->where('student_id', (int)$verified?->id())->first();

        if (null !== $courseLearnerFeedBackCheck && null !== $instructorLearnerFeedBackCheck) {
            flash('Already submitted FeedBack')->error()->important();

            return redirect()->back();
        } elseif (null !== $verified) {
            flash('Your Certificate has been verified. Please add your feedback')->success()->important();
            return redirect()->route('site.learner-feedback.form', ['id' => $course->id(), 'verified' => $verified->id()]);
        } else {
            flash('Your certificate has not been verified or you have not been enrolled in this class')->error()->important();

            return redirect()->back();
        }
    }
}
