<?php

namespace Logixs\Modules\Site\FeedBack\Controllers;

use App\Models\CourseFeedBackParams\CourseFeedBackParams;
use Logixs\Modules\Course\Models\Course;

class LearnerFeedBackIndexController
{
    public function __invoke(int $id)
    {
        $course = Course::query()->findOrFail($id);

        return view('site.learner-feedback', [
            'course' => $course,
        ]);
    }
}
