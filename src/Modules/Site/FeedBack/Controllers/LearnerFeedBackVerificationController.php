<?php

namespace Logixs\Modules\Site\FeedBack\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Logixs\Modules\Course\Models\Course;
use App\Models\Certificate\CertificateAuthentication;
use Logixs\Modules\Course\Models\CourseInstructor;

class LearnerFeedBackVerificationController extends Controller
{
    public function __invoke(Request $request, int $id)
    {
        $data = $this->validate($request, [
            'name' => ['required', 'string'],
            'certificate_serial_number' => ['required', 'string'],
        ]);

        $course = Course::query()->findOrFail($id);
        $courseInstructors = CourseInstructor::query()->with('instructor')->where('course_id', (int)$course->id())->get();

        $verified = CertificateAuthentication::query()
            ->where('name', (string)$data['name'])
            ->where('verify_certificate', (string)$data['certificate_serial_number'])
            ->first();
        if (null !== $verified) {
            flash('Your Certificate has been verified. Please add your feedback')->success();
        } else {
            flash('Your Certificate has not been verified')->error();

        }
        return view('site.learner-feedback', [
            'course' => $course,
            'verified' => $verified,
            'courseInstructors' => $courseInstructors
        ]);
    }
}