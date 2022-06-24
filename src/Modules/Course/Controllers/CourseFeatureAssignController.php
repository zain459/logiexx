<?php

namespace Logixs\Modules\Course\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Logixs\Modules\Course\Models\CourseFeature;

class CourseFeatureAssignController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $this->validate($request, [
            'feature_id' => ['required', 'int', 'exists:feature,id'],
            'course_id' => ['required', 'int', 'exists:courses,id'],
        ]);

        $courseFeature = CourseFeature::query()
            ->where('feature_id', $data['feature_id'])
            ->where('course_id', $data['course_id'])
            ->exists();

        if (!$courseFeature) {
            $courseFeature = new CourseFeature;
            $courseFeature->feature_id = $request->feature_id;
            $courseFeature->course_id = $request->course_id;
            $courseFeature->save();
        }
        flash('Feature assigned')->success();
        return redirect()->back();
    }
}
