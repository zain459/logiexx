<?php

namespace Logixs\Modules\Site\Enrollment\Controllers;

use Logixs\Modules\Course\Models\CourseClass;

class CourseClassEnrollmentCreateController
{
    public function __invoke(int $id)
    {
        $class = CourseClass::findOrFail($id);

        return view('site.course-class-enrollment',[
            'class' => $class
        ]);
    }
}
