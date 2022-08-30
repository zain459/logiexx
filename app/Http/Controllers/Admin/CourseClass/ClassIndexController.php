<?php

namespace App\Http\Controllers\Admin\CourseClass;

use Illuminate\Http\Request;
use Logixs\Modules\Course\Models\Course;
use Logixs\Modules\Course\Models\CourseClass;
use Logixs\Modules\Course\Models\Modality;

class ClassIndexController
{
    public function __invoke(int $id, Request $request)
    {
        /** @var Course $course */
        $course = Course::query()->findOrFail($id);
        $query = CourseClass::query()->where('course_id', $id);
        if (null !== $request->get('key')) {
            $query->where(function ($q) use ($request) {
                $q
                    ->orWhere('title', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('class_seat', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('venue', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('class_duration', 'like', '%' . $request->get('key') . '%');
            });
        }

        if (null !== $request->get('modality')) {
            $query->where('modality', $request->get('modality'));
        }

        if (null !== $request->get('date')) {
            $query->where('date', $request->get('date'));
        }

        $classes = $query->paginate(10);
        $modalities = Modality::all();
        return view('admin.course-class.index', [
            'course' => $course,
            'classes' => $classes,
            'modalities' => $modalities
        ]);
    }
}
