<?php

namespace Logixs\Modules\Course\Controllers;

use Logixs\Modules\Inventory\Model\Category;
use Logixs\Modules\Inventory\Model\SubjectArea;

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
