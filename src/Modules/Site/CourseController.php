<?php

namespace Logixs\Modules\Site;

use Illuminate\Support\Facades\Request;
use Logixs\Modules\Course\Models\Course;
use Logixs\Modules\Course\Models\DifficultyLevel;
use Logixs\Modules\Inventory\Model\SubjectArea;

class CourseController
{
    public function __invoke(Request $request)
    {
//        if ($request->ajax()){
//           dd(Course::getDifficultyLevel($request->difficultyLevel));
//        }
//        dd($request->difficultyLevel);
        $courses = Course::with(['category'])->paginate(6);
        $subjectAreas = SubjectArea::all();

        return view('site.course', [
            'courses' => $courses,
            'subjectAreas' => $subjectAreas
        ]);
    }
}
