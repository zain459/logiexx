<?php

namespace Logixs\Modules\Course\Controllers;

use App\Http\Controllers\Controller;
use Logixs\Modules\Course\Models\Course;

class CourseLogixsAcademy extends Controller
{
    public function __invoke(int $id)
    {
        $course = Course::query()->findOrFail($id);

        return view('course.why-logixs-acadeny', [
            'course' => $course
        ]);
    }
}
