<?php

namespace Logixs\Modules\site\BecomeAnInstructor\Controllers;

use App\Models\SubjectArea\SubjectArea;

class BecomeAnInstructorIndexController
{
    public function __invoke()
    {
        $subjectFields = SubjectArea::all();

        return view('site.become-an-instructor', ['subjectFields' => $subjectFields]);
    }
}
