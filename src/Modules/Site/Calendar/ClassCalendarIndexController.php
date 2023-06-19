<?php

namespace Logixs\Modules\Site\Calendar;

use App\Models\SubjectArea\SubjectArea;
use Illuminate\Http\Request;
use Logixs\Modules\Course\Models\Course;
use Logixs\Modules\Course\Models\CourseClass;

class ClassCalendarIndexController
{
    public function __invoke(Request $request, int $id)
    {
        $specific = Course::with(['category'])->where('id', $id)->first();
        $subjectFields = SubjectArea::all();
        if ($request->ajax()) {
            $class = CourseClass::with('course')->where('course_id', $id)->get()->map(function ($c) {
                return [
//                    'url' => route('site.course-class-enrollment-create', $c->id()),
                    'url' => route('site.registration', $c->id()),
                    'date' => $c->date()->toDateString(),
                    'title' => $c->title() . 'available seats: ' . $c->class_seat,
                ];
            });

            return response()->json($class);
        }
        return view('site.class-calendar', [
            'id' => $id,
            'subjectFields' =>$subjectFields,
            'specific' => $specific
        ]);
    }
}
