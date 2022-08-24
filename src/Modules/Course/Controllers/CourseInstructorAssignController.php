<?php

namespace Logixs\Modules\Course\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Logixs\Modules\Course\Models\CourseInstructor;

class CourseInstructorAssignController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $this->validate($request, [
            'instructor' => ['required', 'int', 'exists:instructors,id'],
            'courseId' => ['required', 'int', 'exists:courses,id'],
        ]);

        $instructor = CourseInstructor::query()
            ->where('instructor_id', $data['instructor'])
            ->where('course_id', $data['courseId'])
            ->exists();

        if (!$instructor) {
            $assign = new CourseInstructor();
            $assign->course_id = $data['courseId'];
            $assign->instructor_id = $data['instructor'];
            $assign->save();
            flash('instructor assigned')->success()->important();

            return redirect()->back();
        } else {
            flash('Instructor Already Assigned')->error()->important();

            return redirect()->back();
        }
    }
}
