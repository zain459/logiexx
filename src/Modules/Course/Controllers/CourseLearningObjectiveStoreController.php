<?php

namespace Logixs\Modules\Course\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Logixs\Modules\Course\Models\CourseLearningObjective;

class CourseLearningObjectiveStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $this->validate($request, [
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
            'courseId' => ['required', 'int', 'exists:courses,id'],
        ]);

        $courseLearningObjective = new CourseLearningObjective();
        $courseLearningObjective->title = $data['title'];
        $courseLearningObjective->description = $data['description'];
        $courseLearningObjective->course_id = $data['courseId'];
        $courseLearningObjective->save();

        flash('Learning Objective submitted')->success();

        return redirect()->back();
    }
}
