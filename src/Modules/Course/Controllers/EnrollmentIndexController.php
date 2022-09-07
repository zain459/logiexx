<?php

namespace Logixs\Modules\Course\Controllers;

use Illuminate\Http\Request;
use Logixs\Modules\Course\Models\Course;
use Logixs\Modules\Course\Models\CourseClass;
use Logixs\Modules\Site\Enrollment\Models\Enrollment;

class EnrollmentIndexController
{
    public function __invoke(int $id, Request $request)
    {

        $class = CourseClass::query()->findOrFail($id);
        $query = Enrollment::query()->with('class')->where('class_id', $class->id());
        if (null !== $request->get('key')) {
            $query->where(function ($q) use ($request) {
                $q
                    ->orWhere('title', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('first_name', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('middle_name', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('last_name', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('degree', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('telephone', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('email', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('position', 'like', '%' . $request->get('key') . '%');
            });
        }
        if (null !== $request->get('status')) {
            $query->where('status', 'like', '%' . $request->get('status') . '%');
        }
        $enrollments = $query->paginate(10);
        $course = $class->course;

        return view('course.enrollment-index', [
            'enrollments' => $enrollments,
            'course' => $course
        ]);


    }
}
