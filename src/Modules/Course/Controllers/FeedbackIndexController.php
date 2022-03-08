<?php

namespace Logixs\Modules\Course\Controllers;

use Logixs\Modules\Course\Models\Course;

class FeedbackIndexController
{
    public function __invoke(int $id)
    {
        $course = Course::query()->findOrFail($id);

        return view('course.feedback-index', [
            'course' => $course,
        ]);
    }
}
