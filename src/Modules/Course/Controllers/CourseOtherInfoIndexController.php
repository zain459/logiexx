<?php

namespace Logixs\Modules\Course\Controllers;

use Logixs\Modules\Course\Models\Course;

class CourseOtherInfoIndexController
{
    public function __invoke(int $id)
    {
        $course = Course::query()->findOrFail($id);

        return view('course.other-info',[
            'course' => $course,
        ]);

    }

}
