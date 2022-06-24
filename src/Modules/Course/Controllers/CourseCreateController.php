<?php

namespace Logixs\Modules\Course\Controllers;

use App\Models\Category\Category;
use App\Models\SubjectArea\SubjectArea;

class CourseCreateController
{
    public function __invoke()
    {
        $category = Category::all();
        $areas = SubjectArea::all();

        return view('course.create', [
            'category' => $category,
            'areas' => $areas,
        ]);
    }
}
