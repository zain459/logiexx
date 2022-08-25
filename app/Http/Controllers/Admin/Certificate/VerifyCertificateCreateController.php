<?php

namespace App\Http\Controllers\Admin\Certificate;

use Logixs\Modules\Site\Enrollment\Models\Enrollment;

class VerifyCertificateCreateController
{
    public function __invoke(int $id)
    {
        $enrollment = Enrollment::query()->findOrFail($id);

        return view('course.enrollment-view', [
            'enrollment' => $enrollment
        ]);
    }
}
