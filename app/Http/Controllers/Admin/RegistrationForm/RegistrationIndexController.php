<?php

namespace App\Http\Controllers\Admin\RegistrationForm;

use App\Http\Controllers\Controller;
use App\Models\Registration\Registration;
use Logixs\Modules\Course\Models\CourseClass;

class RegistrationIndexController extends Controller
{
    public function __invoke(int $id)
    {
        $class = CourseClass::query()->findOrFail($id);
        $registrations = Registration::query()->with('class')->where('class_id', $class->id())->get();

        $course = $class->course;

        return view('course.registration.index', [
            'registrations' => $registrations,
            'course' => $course,
            'class' => $class
        ]);
    }
}
