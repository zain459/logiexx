<?php

namespace Logixs\Modules\Course\Controllers;

use Logixs\Modules\Site\Enrollment\Models\Enrollment;

class EnrollmentIndexController{
    public function __invoke(){
        $enrollments = Enrollment::get();

        return view('course.enrollment-index', [
            'enrollments' => $enrollments
        ]);
    }
}
