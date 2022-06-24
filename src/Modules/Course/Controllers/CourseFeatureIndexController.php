<?php

namespace Logixs\Modules\Course\Controllers;

use Logixs\Modules\Course\Models\Course;
use Logixs\Modules\Course\Models\CourseFeature;
use Logixs\Modules\Inventory\Model\Feature;

class CourseFeatureIndexController
{
    public function __invoke(int $id)
    {
        $course = Course::query()->findOrFail($id);
        $feature = Feature::all();
        $assignedCourseFeatures = CourseFeature::with('feature')
            ->where('course_id', $course->id())->get();
        return view('course.course-feature-index', [
            'course' => $course,
            'assignedCourseFeatures' => $assignedCourseFeatures
        ]);
    }

}
