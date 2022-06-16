<?php

namespace Logixs\Modules\Course\Controllers;

use App\Http\Controllers\Controller;
use Logixs\Modules\Course\Models\Course;
use Logixs\Modules\Course\Models\CourseLearningObjective;

class CourseLearningObjectiveController extends Controller
{
    public function __invoke(int $id)
    {
        /** @var Course $course */
        $course = Course::query()->findOrFail($id);
        $courseLearningObjectives = CourseLearningObjective::query()->where('course_id', $course->id())->get();

        return view('course.learning-objective-index', [
            'course' => $course,
            'courseLearningObjectives' => $courseLearningObjectives
        ]);
    }
}
