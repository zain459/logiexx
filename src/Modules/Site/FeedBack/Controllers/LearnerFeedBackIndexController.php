<?php

namespace Logixs\Modules\Site\FeedBack\Controllers;

use Logixs\Modules\Course\Models\Course;

class LearnerFeedBackIndexController
{
    public function __invoke(int $id)
    {
        $course = Course::query()->findOrFail($id);

        return view('site.feedback-verification', [
            'course' => $course,
        ]);
    }
}
