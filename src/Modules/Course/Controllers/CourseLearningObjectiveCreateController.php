<?php

namespace Logixs\Modules\Course\Controllers;

use Logixs\Modules\Course\Models\Course;

class CourseLearningObjectiveCreateController
{
    public function __invoke(int $id)
    {
        $course = Course::query()->findOrFail($id);

        return view('course.learning-objective-create', [
            'course' => $course,
        ]);
    }
}
