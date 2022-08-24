<?php
//
//namespace Logixs\Modules\Course\Controllers;
//
//use Logixs\Modules\Course\Models\Course;
//use Logixs\Modules\Course\Models\CourseLearningObjective;
//
//class CourseLearningObjectiveEditController
//{
//    public function __invoke(int $id)
//    {
//        $courseLearningObjective = CourseLearningObjective::with('course')->findOrFail($id);
//
//        return view('course.learning-objective-edit', [
//            'courseLearningObjective' => $courseLearningObjective,
//        ]);
//    }
//}


namespace Logixs\Modules\Course\Controllers;

use Logixs\Modules\Course\Models\Course;
use Logixs\Modules\Course\Models\CourseLearningObjective;

class CourseLearningObjectiveEditController
{
    public function __invoke(int $id)
    {
//        $course = Course::query()->findOrFail($id);
        $courseLearningObjective = CourseLearningObjective::with('course')->findOrFail($id);

        return view('course.learning-objective-edit', [
//            'course' => $course,
            'courseLearningObjective' => $courseLearningObjective,
        ]);
    }
}
