<?php

namespace Logixs\Modules\Site\CourseLearnerFeedBack\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Logixs\Modules\Course\Models\Course;
use Logixs\Modules\Site\CourseLearnerFeedBack\Models\CourseLearnerFeedBack;
use Logixs\Modules\Site\CourseLearnerFeedBack\Models\InstructorLearnerFeedBack;

class CourseLearnerFeedBackStoreController extends Controller
{
    public function __invoke(Request $request, int $id)
    {
        $course = Course::query()->findOrFail($id);
        $data = $this->validate($request, [
//            'course_content' => ['required', 'int'],
//            'days_allocated_course' => ['required', 'int'],
//            'delivery_method' => ['required', 'int'],
            'recommend_improvements_course' => ['required', 'string'],
            'comment_on_continuing_appropriateness' => ['required', 'string'],
            'like_most_about_course' => ['required', 'string'],
            'like_us_know_about_course' => ['required', 'string'],
            'quality_of_course' => ['required', 'int'],
            'courseId' => ['required', 'int', 'exists:courses,id'],
            'courseInstructor' => ['required', 'array'],
//            'courseInstructor.*.instructor_course_content' => ['required', 'int'],
//            'courseInstructor.*.instructor_days_allocated_course' => ['required', 'int'],
//            'courseInstructor.*.instructor_delivery_method' => ['required', 'int'],
            'courseInstructor.*.instructor_recommend_improvements_course' => ['required', 'string'],
            'courseInstructor.*.instructor_comment_on_continuing_appropriateness' => ['required', 'string'],
            'courseInstructor.*.instructor_like_most_about_course' => ['required', 'string'],
            'courseInstructor.*.instructor_like_us_know_about_course' => ['required', 'string'],
            'courseInstructor.*.instructor_quality_of_course' => ['required', 'int'],
            'courseInstructor.*.courseId' => ['required', 'int', 'exists:courses,id'],
            'courseInstructor.*.instructorId' => ['required', 'int', 'exists:instructors,id'],
        ]);

        $courseFeedback = new CourseLearnerFeedBack();
//        $courseFeedback->course_content = $data['course_content'];
//        $courseFeedback->days_allocated_course = $data['days_allocated_course'];
//        $courseFeedback->delivery_method = $data['delivery_method'];
        $courseFeedback->recommend_improvements_course = $data['recommend_improvements_course'];
        $courseFeedback->comment_on_continuing_appropriateness = $data['comment_on_continuing_appropriateness'];
        $courseFeedback->like_most_about_course = $data['like_most_about_course'];
        $courseFeedback->like_us_know_about_course = $data['like_us_know_about_course'];
        $courseFeedback->quality_of_course = $data['quality_of_course'];
        $courseFeedback->course_id = $data['courseId'];
        $courseFeedback->save();

        $items = $data['courseInstructor'];
        foreach ($items as $item) {
            $instructorFeedback = new InstructorLearnerFeedBack();
//            $instructorFeedback->instructor_course_content = $item['instructor_course_content'];
//            $instructorFeedback->instructor_days_allocated_course = $item['instructor_days_allocated_course'];
//            $instructorFeedback->instructor_delivery_method = $item['instructor_delivery_method'];
            $instructorFeedback->instructor_recommend_improvements_course = $item['instructor_recommend_improvements_course'];
            $instructorFeedback->instructor_comment_on_continuing_appropriateness = $item['instructor_comment_on_continuing_appropriateness'];
            $instructorFeedback->instructor_like_most_about_course = $item['instructor_like_most_about_course'];
            $instructorFeedback->instructor_like_us_know_about_course = $item['instructor_like_us_know_about_course'];
            $instructorFeedback->instructor_quality_of_course = $item['instructor_quality_of_course'];
            $instructorFeedback->instructor_id = $item['instructorId'];
            $instructorFeedback->course_id = $item['courseId'];
            $instructorFeedback->save();
        }
        flash('FeedBack Submitted')->success();
        return view('site.learner-feedback', [
            'course' => $course
        ]);
    }
}
