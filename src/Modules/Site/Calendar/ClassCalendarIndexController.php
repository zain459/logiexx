<?php

namespace Logixs\Modules\Site\Calendar;

use Illuminate\Http\Request;
use Logixs\Modules\Course\Models\CourseClass;

class ClassCalendarIndexController
{
    public function __invoke(Request $request)
    {
        if ($request->ajax()) {
            $class = CourseClass::with('course')->get()->map(function ($c) {
                return [
                    'date' => $c->date()->toDateString(),
                    'title' => $c->title() . 'available seats: ' . $c->class_seat,
                ];
            });

            return response()->json($class);
        }
        return view('site.class-calendar',
//            [
//            'courseEnrollment' => $courseEnrollment,
//            'currentMonth' => $currentMonth
//        ]
        );
    }
}
