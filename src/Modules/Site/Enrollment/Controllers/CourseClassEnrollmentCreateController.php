<?php

namespace Logixs\Modules\Site\Enrollment\Controllers;

use App\Models\SubjectArea\SubjectArea;
use Logixs\Modules\Course\Models\CourseClass;

class CourseClassEnrollmentCreateController
{
    public function __invoke(int $id)
    {
        $class = CourseClass::findOrFail($id);
        $subjectFields = SubjectArea::all();

        return view('site.course-class-enrollment', [
            'class' => $class,
            'subjectFields' => $subjectFields,
        ]);
    }
}
