<?php

namespace App\Http\Controllers\Admin\CourseClass;

use Logixs\Modules\Course\Models\CourseClass;

class ClassEditController
{
    public function __invoke(int $id)
    {
        $classCourse = CourseClass::with('course')->findOrFail($id);

        return view('admin.course-class.edit', [
            'classCourse' => $classCourse,
        ]);
    }
}
