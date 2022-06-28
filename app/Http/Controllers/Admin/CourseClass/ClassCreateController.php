<?php

namespace App\Http\Controllers\Admin\CourseClass;

use Logixs\Modules\Course\Models\Course;

class ClassCreateController
{
    public function __invoke(int $id)
    {
        $course = Course::query()->findOrFail($id);

        return view('admin.course-class.create',[
            'course' => $course
        ]);
    }
}
