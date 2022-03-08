<?php

namespace Logixs\Modules\Course\Controllers;

use Logixs\Modules\Course\Models\Course;
use Logixs\Modules\Course\Models\Feedback;

class FeedbackIndexController
{
    public function __invoke(int $id)
    {
        /** @var Course $course */
        $course = Course::query()->findOrFail($id);
        $feedbacks = Feedback::query()->where('course_id', $course->id())->get();

        return view('course.feedback-index', [
            'course' => $course,
            'feedbacks' => $feedbacks,
        ]);
    }
}
