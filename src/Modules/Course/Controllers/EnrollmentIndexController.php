<?php

namespace Logixs\Modules\Course\Controllers;

use Logixs\Modules\Course\Models\CourseClass;
use Logixs\Modules\Site\Enrollment\Models\Enrollment;

class EnrollmentIndexController
{
    public function __invoke(int $id)
    {
        $enrollments = Enrollment::with('class')->where('class_id', $id)->get();

        return view('course.enrollment-index', [
            'enrollments' => $enrollments
        ]);
    }
}
