<?php

namespace Logixs\Modules\Site\Enrollment\Controllers;

use Logixs\Modules\Course\Models\Course;
use Logixs\Modules\Course\Models\CourseClass;
use Logixs\Modules\Site\Enrollment\Models\Enrollment;

class CourseClassEnrollmentIndexController
{
    public function __invoke(int $id)
    {
        /** @var CourseClass $class */
        $class = CourseClass::findOrFail($id);

        return view('site.course-class-enrollment', [
            'class' => $class,
        ]);
    }
}



