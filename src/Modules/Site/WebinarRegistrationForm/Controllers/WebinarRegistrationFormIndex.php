<?php

namespace Logixs\Modules\Site\WebinarRegistrationForm\Controllers;

use App\Models\SubjectArea\SubjectArea;

class WebinarRegistrationFormIndex
{
    public function __invoke()
    {
        $subjectFields = SubjectArea::all();

        return view('site.webinar-registration-form', [
            'subjectFields' => $subjectFields
        ]);
    }
}
