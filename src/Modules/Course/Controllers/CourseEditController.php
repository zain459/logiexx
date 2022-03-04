<?php

namespace Logixs\Modules\Course\Controllers;

use Logixs\Modules\Course\Models\Course;
use Logixs\Modules\Inventory\Model\Category;
use Logixs\Modules\Inventory\Model\SubjectArea;

class CourseEditController
{
    public function __invoke(int $id)
    {
        $category = Category::all();
        $subjectArea = SubjectArea::all();
        $course = Course::with(['category', 'subjectArea'])->findOrFail($id);

        return view('course.edit', [
            'course' => $course,
            'category' => $category,
            'subjectArea' => $subjectArea,
        ]);
    }
}
