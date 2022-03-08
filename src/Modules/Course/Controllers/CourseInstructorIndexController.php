<?php

namespace Logixs\Modules\Course\Controllers;

use Logixs\Modules\Course\Models\Course;
use Logixs\Modules\Instructor\Models\Instructor;
use Logixs\Modules\Course\Models\CourseInstructor;

class CourseInstructorIndexController
{
    public function __invoke(int $id)
    {
        /** @var Course $course */
        $course = Course::query()->findOrFail($id);
        $instructors = Instructor::all();
        $assignedInstructors = CourseInstructor::with('instructor')
            ->where('course_id', $course->id())->get();

        return view('course.instructor-index', [
            'course' => $course,
            'instructors' => $instructors,
            'assignedInstructors' => $assignedInstructors,
        ]);
    }
}
