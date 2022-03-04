<?php

namespace Logixs\Modules\Course\Controllers;

use Logixs\Modules\Course\Query\GetCourse;

class CourseIndexController
{
    public function __invoke()
    {
        $courses = GetCourse::get();

        return view('course.index', [
            'courses' => $courses,
        ]);
    }
}
