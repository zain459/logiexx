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
        dd($request->all());
        $course = Course::query()->findOrFail($id);
        $data = $this->validate($request, [
            'recommend_improvements_course' => ['required', 'string'],
            'comment_on_continuing_appropriateness' => ['required', 'string'],
            'like_most_about_course' => ['required', 'string'],
            'like_us_know_about_course' => ['required', 'string'],
            'quality_of_course' => ['required', 'int'],
            'courseId' => ['required', 'int', 'exists:courses,id'],
            'courseInstructor' => ['required', 'array'],
            'courseInstructor.*.instructor_recommend_improvements_course' => ['required', 'string'],
            'courseInstructor.*.instructor_comment_on_continuing_appropriateness' => ['required', 'string'],
            'courseInstructor.*.instructor_like_most_about_course' => ['required', 'string'],
            'courseInstructor.*.instructor_like_us_know_about_course' => ['required', 'string'],
            'courseInstructor.*.instructor_quality_of_course' => ['required', 'int'],
            'courseInstructor.*.courseId' => ['required', 'int', 'exists:courses,id'],
            'courseInstructorFeedbackParamIndex.*.instructorCourseFeedbackParams_id' => ['required', 'int'],
            'courseInstructorFeedbackParamIndex.*.instructor_course_feedback_param_value' => ['required', 'string'],
            'course.*.courseFeedbackParams_id' => ['required', 'int'],
            'course.*.course_feedback_param_value' => ['required', 'string'],
            'courseInstructorFeedbackParam.*.course_feedback_param_value' => ['required', 'string'],
            'courseInstructorFeedbackParam.*.instructorCourseFeedbackParams_id' => ['required', 'int'],
        ]);
        dd($data);
        $courseFeedback = new CourseLearnerFeedBack();
        $courseFeedback->recommend_improvements_course = $data['recommend_improvements_course'];
        $courseFeedback->comment_on_continuing_appropriateness = $data['comment_on_continuing_appropriateness'];
        $courseFeedback->like_most_about_course = $data['like_most_about_course'];
        $courseFeedback->like_us_know_about_course = $data['like_us_know_about_course'];
        $courseFeedback->quality_of_course = $data['quality_of_course'];
        $courseFeedback->course_id = $data['courseId'];
        $courseFeedback->save();
        $courseFeedbackId = $courseFeedback->id();

        $courseItems = $data['course'];
        foreach ($courseItems as $courseItem) {
            $feedbackParamsValue = new FeedbackParamsValue();
            $feedbackParamsValue->course_feedback_id = $courseFeedbackId;
            $feedbackParamsValue->course_feedback_param_id = $courseItem['courseFeedbackParams_id'];
            $feedbackParamsValue->course_feedback_param_value = $courseItem['course_feedback_param_value'];
            $feedbackParamsValue->save();
        }

        $items = $data['courseInstructor'];
        foreach ($items as $item) {
            $instructorFeedback = new InstructorLearnerFeedBack();
            $instructorFeedback->instructor_recommend_improvements_course = $item['instructor_recommend_improvements_course'];
            $instructorFeedback->instructor_comment_on_continuing_appropriateness = $item['instructor_comment_on_continuing_appropriateness'];
            $instructorFeedback->instructor_like_most_about_course = $item['instructor_like_most_about_course'];
            $instructorFeedback->instructor_like_us_know_about_course = $item['instructor_like_us_know_about_course'];
            $instructorFeedback->instructor_quality_of_course = $item['instructor_quality_of_course'];
            $instructorFeedback->instructor_id = $item['instructorId'];
            $instructorFeedback->course_id = $item['courseId'];
            $instructorFeedback->save();
            $instructorFeedbackId = $instructorFeedback->id();
        }

        $courseInstructorFeedbackParams = $data['courseInstructorFeedbackParam'];
        foreach ($courseInstructorFeedbackParams as $courseInstructorFeedbackParam) {
            $feedbackInstructorParamsValue = new FeedbackParamsValue();
            $feedbackInstructorParamsValue->instructor_feedback_id = $instructorFeedbackId;
            $feedbackInstructorParamsValue->course_feedback_param_value = $courseInstructorFeedbackParam['course_feedback_param_value'];
            $feedbackInstructorParamsValue->course_feedback_param_id = $courseInstructorFeedbackParam['instructorCourseFeedbackParams_id'];
            $feedbackInstructorParamsValue->save();
        }

        flash('FeedBack Submitted')->success();
        return view('site.learner-feedback', [
            'course' => $course
        ]);
    }
}
