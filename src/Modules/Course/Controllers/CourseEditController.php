<?php

namespace Logixs\Modules\Course\Controllers;

use App\Models\Category\Category;
use App\Models\SubjectArea\SubjectArea;
use Logixs\Modules\Course\Models\Course;

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
