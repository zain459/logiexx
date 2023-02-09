<?php

namespace Logixs\Modules\Site\CourseLearnerFeedBack\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Logixs\Modules\Course\Models\Course;
use Logixs\Modules\Site\CourseLearnerFeedBack\Models\FeedbackParamsValue;
use Logixs\Modules\Site\CourseLearnerFeedBack\Models\CourseLearnerFeedBack;
use Logixs\Modules\Site\CourseLearnerFeedBack\Models\InstructorLearnerFeedBack;

class CourseLearnerFeedBackStoreController extends Controller
{
    public function __invoke(Request $request, int $id)
    {

        $course = Course::query()->findOrFail($id);
//        $verified = CertificateAuthentication::query()->findOrFail($id);
        $data = $this->validate($request, [
            'course.recommend_improvements_course' => ['required', 'string'],
            'course.comment_on_continuing_appropriateness' => ['required', 'string'],
            'course.like_most_about_course' => ['required', 'string'],
            'course.like_us_know_about_course' => ['required', 'string'],
            'course.quality_of_course' => ['required', 'int'],
            'course.studentId' => ['required', 'int'],
            'course.course_feedback_params' => ['required', 'array'],

            'instructors' => ['required', 'array'],
            'instructors.*.feedback_params' => ['required', 'array'],
            'instructors.*.recommend_improvements_course' => ['required', 'string'],
            'instructors.*.comment_on_continuing_appropriateness' => ['required', 'string'],
            'instructors.*.like_most_about_course' => ['required', 'string'],
            'instructors.*.like_us_know_about_course' => ['required', 'string'],
            'instructors.*.studentId' => ['required', 'int'],
            'instructors.*.instructor_quality_of_course' => ['required', 'int'],
        ]);

        $courseFeedbackData = $data['course'];
        $courseFeedback = new CourseLearnerFeedBack();
        $courseFeedback->recommend_improvements_course = $courseFeedbackData['recommend_improvements_course'];
        $courseFeedback->comment_on_continuing_appropriateness = $courseFeedbackData['comment_on_continuing_appropriateness'];
        $courseFeedback->like_most_about_course = $courseFeedbackData['like_most_about_course'];
        $courseFeedback->like_us_know_about_course = $courseFeedbackData['like_us_know_about_course'];
        $courseFeedback->quality_of_course = $courseFeedbackData['quality_of_course'];
        $courseFeedback->student_id = $courseFeedbackData['studentId'];
        $courseFeedback->course_id = $course->id();
        $courseFeedback->save();

        foreach ($courseFeedbackData['course_feedback_params'] as $paramKey => $value) {
            $feedbackParamsValue = new FeedbackParamsValue();
            $feedbackParamsValue->course_feedback_id = $courseFeedback->id();
            $feedbackParamsValue->course_feedback_param_id = $paramKey;
            $feedbackParamsValue->course_feedback_param_value = $value;
            $feedbackParamsValue->save();
        }

        $instructorFeedBackData = $data['instructors'];
        foreach ($instructorFeedBackData as $key => $item) {
            $instructorFeedback = new InstructorLearnerFeedBack();
            $instructorFeedback->instructor_recommend_improvements_course = $item['recommend_improvements_course'];
            $instructorFeedback->instructor_comment_on_continuing_appropriateness = $item['comment_on_continuing_appropriateness'];
            $instructorFeedback->instructor_like_most_about_course = $item['like_most_about_course'];
            $instructorFeedback->instructor_like_us_know_about_course = $item['like_us_know_about_course'];
            $instructorFeedback->instructor_quality_of_course = $item['instructor_quality_of_course'];
            $instructorFeedback->course_id = $course->id();
                $instructorFeedback->student_id = $item['studentId'];
            $instructorFeedback->instructor_id = $key;
            $instructorFeedback->save();
            foreach ($item['feedback_params'] as $paramKey => $value) {
                $feedbackInstructorParamsValue = new FeedbackParamsValue();
                $feedbackInstructorParamsValue->instructor_feedback_id = $instructorFeedback->id();
                $feedbackInstructorParamsValue->course_feedback_param_value = $value;
                $feedbackInstructorParamsValue->course_feedback_param_id = $paramKey;
                $feedbackInstructorParamsValue->save();
            }
        }

        flash('FeedBack Submitted')->success()->important();

        return redirect()->route('site.course-detail', $course->id());
//        return view('site.learner-feedback', [
//            'course' => $course
//        ]);
    }
}
