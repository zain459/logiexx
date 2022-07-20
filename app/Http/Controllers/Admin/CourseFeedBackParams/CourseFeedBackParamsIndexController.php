<?php

namespace App\Http\Controllers\Admin\CourseFeedBackParams;


use Logixs\Modules\Course\Models\Course;
use App\Models\FeedBackParams\FeedBackParams;
use App\Models\CourseFeedBackParams\CourseFeedBackParams;

class CourseFeedBackParamsIndexController
{
    public function __invoke(int $id)
    {
        $feedbacks = FeedBackParams::all();
        $course = Course::query()->findOrFail($id);
        $courseFeedbackParams = CourseFeedBackParams::with('feedbackParam')->where('course_id', $course->id())->get();

        return view('admin.course-feedback-params.index', [
            'course' => $course,
            'feedbacks' => $feedbacks,
            'courseFeedbackParams' => $courseFeedbackParams,
        ]);
    }
}
