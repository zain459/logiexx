<?php

namespace App\Http\Controllers\Site\RegistrationForm;

use App\Http\Controllers\Controller;
use App\Models\SubjectArea\SubjectArea;
use Logixs\Modules\Course\Models\CourseClass;

class RegistrationFormController extends Controller
{
    public function __invoke(int $id)
    {
        $subjectFields = SubjectArea::all();
        $class = CourseClass::findOrFail($id);

        return view('site.registration-form.registration', [
            'class' => $class,
            'subjectFields' => $subjectFields
        ]);
    }
}
