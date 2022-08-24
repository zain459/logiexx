<?php

namespace Logixs\Modules\Course\Controllers;

use Logixs\Modules\Site\Enrollment\Models\Enrollment;

class EnrollmentDeleteController
{
    public function __invoke(int $id)
    {
        $enrollment = Enrollment::findOrFail($id);
        $enrollment->delete();

        flash('Enrollment Removed')->error()->important();
        return redirect()->route('course.enrollment-index', $enrollment->classId());
    }
}
