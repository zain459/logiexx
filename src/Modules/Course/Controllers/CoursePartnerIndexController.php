<?php

namespace Logixs\Modules\Course\Controllers;

use Logixs\Modules\Course\Models\Course;

class CoursePartnerIndexController
{
    public function __invoke(int $id)
    {
        $course = Course::query()->findOrFail($id);

        $courses = Course::all();

        return view('course.partner-index', [
            'course' => $course,
            'courses' => $courses,
        ]);
    }
}
