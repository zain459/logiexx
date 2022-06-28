<?php

namespace App\Http\Controllers\Admin\Certificate;

use App\Models\Certificate\CertificateAuthentication;
use Logixs\Modules\Course\Models\CourseClass;

class VerifyCertificateController
{
    public function __invoke(int $id)
    {
        $class = CourseClass::findOrFail($id);
        $verifyCertifications = CertificateAuthentication::with('class')->get();

        return view('admin.verify-certificate.index', [
            'class' => $class,
            'verifyCertifications' => $verifyCertifications
        ]);
    }
}
