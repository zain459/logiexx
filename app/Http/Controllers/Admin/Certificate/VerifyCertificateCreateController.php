<?php

namespace App\Http\Controllers\Admin\Certificate;

use Logixs\Modules\Course\Models\CourseClass;

class VerifyCertificateCreateController
{
    public function __invoke(int $id)
    {
        $class = CourseClass::findOrFail($id);

        return view('admin.verify-certificate.create',[
            'class' => $class
        ]);
    }
}
