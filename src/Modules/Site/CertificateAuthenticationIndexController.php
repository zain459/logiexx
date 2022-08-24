<?php

namespace Logixs\Modules\Site;

use App\Models\SubjectArea\SubjectArea;

class CertificateAuthenticationIndexController
{
    public function __invoke()
    {
        $subjectFields = SubjectArea::all();

        return view('site.certificate-authentication', [
            'subjectFields' => $subjectFields
        ]);
    }
}
