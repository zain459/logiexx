<?php

namespace Logixs\Modules\Course\Controllers;

use Logixs\Modules\Course\Models\CourseFeature;

class CourseFeatureDeleteController
{
    public function __invoke(int $id)
    {
        CourseFeature::query()->findOrFail($id)->delete();

        flash('feature removed')->success();

        return redirect()->back();
    }
}
