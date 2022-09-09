<?php

namespace Logixs\Modules\Site\Enrollment\Controllers;

use App\Models\Certificate\CertificateAuthentication;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\EnrollmentEmail;
use Logixs\Services\SaveImage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Logixs\Modules\Site\Enrollment\Models\Enrollment;

class CourseClassEnrollmentStoreController extends Controller
{
    public function __invoke(Request $request)
    {
//        dd($request->all());
        $data = $this->validate($request, [
            'title' => ['required', 'string'],
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'middle_name' => ['string'],
            'degree' => ['required', 'string'],
            'code' => ['required', 'string'],
            'telephone' => ['required', 'string'],
            'email' => ['required', 'string', 'unique:enrollments,email'],
            'personal_address' => ['required', 'string'],
            'personal_city' => ['required', 'string'],
            'personal_post_code' => ['required', 'string'],
            'personal_province' => ['required', 'string'],
            'personal_country' => ['required', 'string'],
            'employment_status' => ['required', 'int'],
            'position' => ['required', 'string'],
            'department' => ['required', 'string'],
            'institution' => ['required', 'string'],
            'institution_address' => ['required', 'string'],
            'institution_city' => ['required', 'string'],
            'institution_post_code' => ['required', 'string'],
            'institution_country' => ['required', 'string'],
            'institution_province_state' => ['required', 'string'],
            'verifiable' => ['nullable', 'boolean'],
            'description' => ['nullable', 'string'],
            'file' => ['required', 'mimes:jpeg,png,jpg', 'max:2048'],
            'classId' => ['required', 'int', 'exists:classes,id'],
        ]);

        $enrollment = new Enrollment();
        $enrollment->title = $data['title'];
        $enrollment->first_name = $data['first_name'];
        $enrollment->last_name = $data['last_name'];
        $enrollment->degree = $data['degree'];
        $enrollment->middle_name = $data['middle_name'];
        $enrollment->code = $data['code'];
        $enrollment->telephone = $data['telephone'];
        $enrollment->email = $data['email'];
        $enrollment->personal_address = $data['personal_address'];
        $enrollment->personal_city = $data['personal_city'];
        $enrollment->personal_post_code = $data['personal_post_code'];
        $enrollment->personal_province = $data['personal_province'];
        $enrollment->personal_country = $data['personal_country'];
        $enrollment->employment_status = $data['employment_status'];
        $enrollment->position = $data['position'];
        $enrollment->department = $data['department'];
        $enrollment->institution = $data['institution'];
        $enrollment->institution_address = $data['institution_address'];
        $enrollment->institution_city = $data['institution_city'];
        $enrollment->institution_post_code = $data['institution_post_code'];
        $enrollment->institution_province_state = $data['institution_province_state'];
        $enrollment->institution_country = $data['institution_country'];
        if (isset($data['verifiable'])) {
            $enrollment->verifiable_certificate = $data['verifiable'];
        }
        if (isset($data['description'])) {
            $enrollment->description = $data['description'];
        }

        /** @var \Illuminate\Http\UploadedFile * */
        $file = $request->file('file');
        $path = SaveImage::save($file);
        $name = sprintf('%s.%s', (string)Str::uuid(), $file->getClientOriginalExtension());
//        $path = $file->storeAs('public/images', $name);
        $originalName = $file->getClientOriginalName();
        $fileType = $file->getClientMimeType();
        $fileSize = $file->getSize();
        $enrollment->file = $path;
        $enrollment->file_name = $originalName;
        $enrollment->file_type = $fileType;
        $enrollment->file_size = $fileSize;
        $enrollment->class_id = $data['classId'];
        $enrollment->save();
        if ($enrollment->verifiableCertificate() == 1) {
            $certificate = new CertificateAuthentication();
            $certificate->name = $enrollment->firstName();
            $certificate->certificate = Str::random(8);;
            $certificate->enrollment_id = $enrollment->id();
            $certificate->course_id = $enrollment->class->courseId();
            $certificate->issue_date = Carbon::now()->addDays(5);
            $certificate->save();
        }
//        $enrollmentEmail = new EnrollmentEmail($enrollment);
//        $mail = Mail::to($enrollment->email());
//        $mail->send($enrollmentEmail);

        flash('Enrollment submitted')->success()->important();

        return redirect()->back();
    }

//    private function str_random(int $int)
//    {
//        $certificate = new CertificateAuthentication();
//        $certificate->certificate = $int;
//    }
}
