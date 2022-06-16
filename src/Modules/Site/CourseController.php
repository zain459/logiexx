<?php

namespace Logixs\Modules\Site;

use Logixs\Modules\Course\Models\Course;
use Logixs\Modules\Inventory\Model\SubjectArea;

class CourseController
{
    public function __invoke()
    {
        $courses = Course::with(['category'])->paginate(6);
        $subjectAreas = SubjectArea::all();

        return view('site.course', [
            'courses' => $courses,
            'subjectAreas' => $subjectAreas
        ]);
    }
}
