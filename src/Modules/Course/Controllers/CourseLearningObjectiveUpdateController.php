<?php

namespace Logixs\Modules\Course\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Logixs\Modules\Course\Models\CourseLearningObjective;

class CourseLearningObjectiveUpdateController extends Controller
{
    /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function __invoke(Request $request, int $id)
    {
        $data = $this->validate($request, [
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
//            'course_id' => ['required', 'int'],
        ]);

        /** @var CourseLearningObjective $courseLearningObjective */
        $courseLearningObjective = CourseLearningObjective::query()->findOrFail($id);
        $courseLearningObjective->title = $data['title'];
        $courseLearningObjective->description = $data['description'];
        $courseLearningObjective->save();

        flash('Course Learning Objective Updated')->success();

        return redirect()->back();
    }
}
