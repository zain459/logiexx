<?php

namespace App\Http\Controllers\Admin\RegistrationForm;

use App\Http\Controllers\Controller;
use Logixs\Modules\Course\Models\CourseClass;

class RegistrationCreateController extends Controller
{
    public function __invoke(int $id)
    {
        $class = CourseClass::query()->findOrFail($id);

        return view('course.registration.create', [
            'class' => $class
        ]);
    }
}
