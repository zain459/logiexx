<?php

namespace Logixs\Modules\site\CorporatePartnership\Controllers;

use App\Models\SubjectArea\SubjectArea;

class CorporatePartnershipIndexController
{
    public function __invoke()
    {
        $subjectFields = SubjectArea::all();

        return view('site.corporate-partnership', [
            'subjectFields' => $subjectFields
        ]);
    }
}
