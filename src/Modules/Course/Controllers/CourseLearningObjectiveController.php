<?php

namespace Logixs\Modules\Course\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Logixs\Modules\Course\Models\Course;
use Logixs\Modules\Course\Models\CourseLearningObjective;

class CourseLearningObjectiveController extends Controller
{
    public function __invoke(int $id, Request $request)
    {
        /** @var Course $course */
        $course = Course::query()->findOrFail($id);
        $query = CourseLearningObjective::query()->where('course_id', $course->id());
        if (null !== $request->get('key')) {
            $query->where(function ($q) use ($request) {
                $q
                    ->orWhere('title', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('description', 'like', '%' . $request->get(strip_tags('key')) . '%');
            });
        }
        $courseLearningObjectives = $query->paginate(10);

        return view('course.learning-objective-index', [
            'course' => $course,
            'courseLearningObjectives' => $courseLearningObjectives
        ]);
    }
}
