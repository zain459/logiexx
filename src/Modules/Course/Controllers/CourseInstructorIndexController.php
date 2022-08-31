<?php

namespace Logixs\Modules\Course\Controllers;

use Illuminate\Http\Request;
use Logixs\Modules\Course\Models\Course;
use Logixs\Modules\Instructor\Models\Instructor;
use Logixs\Modules\Course\Models\CourseInstructor;

class CourseInstructorIndexController
{
    public function __invoke(int $id, Request $request)
    {

        /** @var Course $course */
        $course = Course::query()->findOrFail($id);
        $instructors = Instructor::all();
        $query = CourseInstructor::query()
            ->with('instructor')
            ->where('course_id', $course->id())->orderBy('id', 'Desc');

        if (null !== $request->get('key')) {
            $query->whereHas('instructor', function ($q) use ($request){
                $q->where(function ($a) use($request){
                    $a->orWhere('name', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('email', 'like', '%' . $request->get('key') . '%');
                });
            });
        }
        $assignedInstructors = $query->paginate(10);
        return view('course.instructor-index', [
            'course' => $course,
            'instructors' => $instructors,
            'assignedInstructors' => $assignedInstructors,
        ]);
    }
}
