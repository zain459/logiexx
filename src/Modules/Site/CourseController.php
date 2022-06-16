<?php

namespace Logixs\Modules\Site;

use Logixs\Modules\Course\Models\Course;

class CourseController
{
    public function __invoke()
    {
        $courses = Course::with(['category'])->paginate(6);

        return view('site.course', [
            'courses' => $courses
        ]);
    }
}
