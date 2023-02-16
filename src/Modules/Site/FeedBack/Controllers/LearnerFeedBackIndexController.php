<?php
//
//namespace Logixs\Modules\Site\FeedBack\Controllers;
//
//use Illuminate\Http\Request;
//use Logixs\Modules\Course\Models\Course;
//use Logixs\Modules\Course\Models\CourseInstructor;
//use App\Models\Certificate\CertificateAuthentication;
//use App\Models\CourseFeedBackParams\CourseFeedBackParams;
//use Logixs\Modules\Site\CourseLearnerFeedBack\Models\CourseLearnerFeedBack;
//use Logixs\Modules\Site\CourseLearnerFeedBack\Models\InstructorLearnerFeedBack;
//
//class VerifyCertificateController
//{
//    public function form(int $id)
//    {
//        $course = Course::query()->findOrFail($id);
//
//        return view('site.feedback-verification', [
//            'course' => $course,
//        ]);
//    }
//
//    public function verify(int $id, Request $request)
//    {
//        $data = $this->validate($request, [
//            'name' => ['required', 'string'],
//            'certificate_serial_number' => ['required', 'string'],
//        ]);
//
//        $course = Course::query()->findOrFail($id);
//        $courseInstructors = CourseInstructor::query()->with('instructor')
//            ->where('course_id', (int)$course->id())->get();
//
//        $courseFeedbackParams = CourseFeedBackParams::with('feedbackParam')
//            ->where('course_id', $course->id())
//            ->where('type', 'Course')->get();
//
//        $instructorFeedbackParams = CourseFeedBackParams::with('feedbackParam')
//            ->where('course_id', $course->id())
//            ->where('type', lcfirst('Instructor'))->get();
//
//        $verified = CertificateAuthentication::query()
//            ->where('name', (string)$data['name'])
//            ->where('verify_certificate', (string)$data['certificate_serial_number'])
//            ->first();
//
//        $courseLearnerFeedBackCheck = CourseLearnerFeedBack::query()
//            ->where('student_id', (int)$verified?->id())->first();
//
//        $instructorLearnerFeedBackCheck = InstructorLearnerFeedBack::query()
//            ->where('student_id', (int)$verified?->id())->first();
//
//        if (null !== $verified) {
//            flash('Your Certificate has been verified. Please add your feedback')->success()->important();
//            redirect()->route('site.learner-feedback.form', []);
//        } else {
//            flash('Your Certificate has not been verified')->error()->important();
////            return view('site.learner-feedback');
//            return redirect()->back();
//        }
//    }
//
//}
