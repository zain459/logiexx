<?php

namespace App\Http\Controllers\Admin\Certificate;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Certificate\CertificateAuthentication;
use Logixs\Modules\Site\Enrollment\Models\Enrollment;

class VerifyCertificateStoreController extends Controller
{
    public function __invoke(Request $request, int $id)
    {
        $enrollment = Enrollment::query()->findOrFail($id);
        $data = $this->validate($request, [
            'name' => ['required', 'string'],
            'certificate' => ['required', 'string'],
            'issue_date' => ['required', 'date'],
            'enrollment_id' => ['required', 'int', 'exists:enrollments,id'],
            'course_id' => ['required', 'int', 'exists:classes,course_id']
        ]);

        $certificateAuthentication = new CertificateAuthentication();
        $certificateAuthentication->name = $data['name'];
        $certificateAuthentication->certificate = $data['certificate'];
        $certificateAuthentication->issue_date = $data['issue_date'];
        $certificateAuthentication->enrollment_id = $data['enrollment_id'];
        $certificateAuthentication->course_id = $data['course_id'];

        $certificateAuthentication->save();
        Enrollment::where('id', $certificateAuthentication->enrollment_id)->update(['verifiable_certificate' => 1]);

        flash('Certificate Submitted Successfully')->success()->important();

        return redirect()->route('course.enrollment-view', $enrollment->id());
    }
}
