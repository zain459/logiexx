<?php

namespace Logixs\Modules\Course\Controllers;

use App\Models\Certificate\CertificateAuthentication;
use Logixs\Modules\Site\Enrollment\Models\Enrollment;

class EnrollmentViewController
{
    public function __invoke(int $id)
    {

        $enrollment = Enrollment::with('class')->findOrFail($id);
        $verifyCertification = CertificateAuthentication::get()->count();
        $verifyCertifications = CertificateAuthentication::get();

        return view('course.enrollment-view', [
            'enrollment' => $enrollment,
            'verifyCertification' => $verifyCertification,
            'verifyCertifications' => $verifyCertifications
        ]);
    }
}
