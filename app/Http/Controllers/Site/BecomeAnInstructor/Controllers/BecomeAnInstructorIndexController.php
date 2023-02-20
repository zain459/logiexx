<?php

namespace App\Http\Controllers\Site\BecomeAnInstructor\Controllers;

use App\Models\SubjectArea\SubjectArea;
use Logixs\Modules\Course\Models\Modality;

class BecomeAnInstructorIndexController
{
    public function __invoke()
    {
        $subjectFields = SubjectArea::all();
        $modalities = Modality::all();

        return view('site.become-an-instructor', [
                'subjectFields' => $subjectFields,
                'modalities' => $modalities
            ]);
    }
}
