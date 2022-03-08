<?php

namespace Logixs\Modules\Course\Controllers;

use Logixs\Modules\Course\Models\CourseInstructor;

class CourseInstructorDeleteController
{
    public function __invoke(int $id)
    {
        CourseInstructor::query()->findOrFail($id)->delete();

        flash('instructor removed')->success();

        return redirect()->back();
    }
}
