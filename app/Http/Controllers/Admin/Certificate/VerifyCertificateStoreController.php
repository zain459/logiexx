<?php

namespace App\Http\Controllers\Admin\Certificate;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Logixs\Modules\Course\Models\CourseClass;
use App\Models\Certificate\CertificateAuthentication;

class VerifyCertificateStoreController extends Controller
{
    public function __invoke(Request $request, int $id)
    {
        $class = CourseClass::query()->findOrFail($id);
        $data = $this->validate($request, [
            'name' => ['required', 'string'],
            'verify_certificate' => ['required', 'string'],
            'issue_date' => ['required', 'date'],
            'class_id' => ['required', 'int', 'exists:classes,id'],
        ]);

        $certificateAuthentication = new CertificateAuthentication();
        $certificateAuthentication->name = $data['name'];
        $certificateAuthentication->verify_certificate = $data['verify_certificate'];
        $certificateAuthentication->issue_date = $data['issue_date'];
        $certificateAuthentication->class_id = $data['class_id'];

        $certificateAuthentication->save();
        flash('Certificate Authentication Submitted Successfully')->success()->important();
        
        return redirect(route('admin.verify-certificate.index', $class->id()));
    }
}
