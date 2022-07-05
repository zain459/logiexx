<?php

namespace App\Http\Controllers\Admin\CourseClass;

use Logixs\Modules\Course\Models\Course;
use Logixs\Modules\Course\Models\CourseClass;

class ClassIndexController
{
    public function __invoke(int $id)
    {
        /** @var Course $course */
        $course = Course::query()->findOrFail($id);
        $classes = CourseClass::where('course_id', $id)->get();

        return view('admin.course-class.index', [
            'course' => $course,
            'classes' => $classes
        ]);
    }
}
