<?php

namespace Logixs\Modules\Course\Controllers;

use Logixs\Modules\Site\Enrollment\Models\Enrollment;

class EnrollmentViewController{
    public function __invoke(int $id)
    {
       $enrollment = Enrollment::with('course')->findOrFail($id);

       return view('course.enrollment-view', [
           'enrollment' => $enrollment
       ]);
    }
}
