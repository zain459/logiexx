<?php

namespace Logixs\Modules\Site\Enrollment\Controllers;


use Logixs\Modules\Course\Models\Course;
use Logixs\Modules\Site\Enrollment\Models\Enrollment;

class CourseEnrollmentIndexController
{
    public function __invoke(int $id)
    {
        /** @var Course $course */
        $course = Course::query()->findOrFail($id);

        return view('site.course-enrollment', [
            'course' => $course,
        ]);
    }
}
