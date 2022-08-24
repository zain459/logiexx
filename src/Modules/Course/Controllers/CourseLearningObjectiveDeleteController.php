<?php

namespace Logixs\Modules\Course\Controllers;

use Logixs\Modules\Course\Models\CourseLearningObjective;

class CourseLearningObjectiveDeleteController
{
    public function __invoke(int $id)
    {
        CourseLearningObjective::query()->findOrFail($id)->delete();

        flash('Course Learning Objective deleted')->error()->important();

        return redirect()->back();
    }
}
