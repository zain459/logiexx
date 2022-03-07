<?php

namespace Logixs\Modules\Course\Controllers;

use Logixs\Modules\Course\Models\Course;
use Logixs\Modules\Course\Models\CourseOtherInfo;

class CourseOtherInfoIndexController
{
    public function __invoke(int $id)
    {
        /** @var Course $course */
        $course = Course::query()->findOrFail($id);
        $courseDetails = CourseOtherInfo::query()->where('course_id',$course->id())->get();

        return view('course.other-info', [
            'course' => $course,
            'courseDetails' => $courseDetails,
        ]);
    }
}
