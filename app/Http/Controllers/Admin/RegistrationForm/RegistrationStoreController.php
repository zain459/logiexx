<?php

namespace App\Http\Controllers\Admin\RegistrationForm;

use App\Http\Controllers\Controller;
use App\Models\Registration\Registration;
use Illuminate\Http\Request;
use Logixs\Services\SaveImage;

class RegistrationStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $this->validate($request, [
            'registration_no' => ['nullable', 'string'],
            'is_registered' => ['boolean'],
            'full_name' => ['nullable', 'string'],
            'father_husband_name' => ['nullable', 'string'],
            'date_of_birth' => ['nullable', 'string'],
            'gender' => ['nullable', 'string'],
            'marital_status' => ['nullable', 'string'],
            'c_n_i_c' => ['nullable', 'string'],
            'passport_no' => ['nullable', 'string'],
            'religion' => ['nullable', 'string'],
            'nationality' => ['nullable', 'string'],
            'blood_group' => ['nullable', 'string'],
            'preferred_learning_method' => ['nullable', 'string'],
            'residential_address' => ['nullable', 'string'],
            'postal_code' => ['nullable', 'string'],
            'city' => ['nullable', 'string'],
            'country' => ['nullable', 'string'],
            'telephone' => ['nullable', 'string'],
            'code' => ['nullable', 'string'],
            'phone' => ['nullable', 'string'],
            'personal_email' => ['nullable', 'string'],
            'educational_qualification' => ['nullable', 'string'],
            'employment_status' => ['nullable', 'string'],
            'business_type_designation' => ['nullable', 'string'],
            'business_name' => ['nullable', 'string'],
            'official_address' => ['nullable', 'string'],
            'official_telephone' => ['nullable', 'string'],
            'institutional_email' => ['nullable', 'string'],
            'activity_type' => ['nullable', 'string'],
            'activity_title' => ['nullable', 'string'],
            'is_paid' => ['nullable', 'boolean'],
            'course_fee' => ['nullable', 'string'],
            'course_tax' => ['nullable', 'string'],
            'sponsor_name' => ['nullable', 'string'],
            'contact_person' => ['nullable', 'string'],
            'sponsor_mobile' => ['nullable', 'string'],
            'sponsor_email' => ['nullable', 'string'],
            'sponsor_address' => ['nullable', 'string'],
            'certificate_nominal_fee' => ['nullable', 'string'],
            'certificate_charge' => ['nullable', 'string'],
            'emergency_name' => ['nullable', 'string'],
            'emergency_relationship' => ['nullable', 'string'],
            'emergency_mobile_no' => ['nullable', 'string'],
            'classId' => ['required', 'int', 'exists:classes,id'],
            'file' => ['nullable', 'mimes:jpeg,png,jpg', 'max:2048'],
        ]);

        $registration = new Registration();
        $registration->registration_no = $data['registration_no'] ?? null;
        if (isset($data['is_registered'])) {
            $registration->is_registered = $data['is_registered'];
        }
        $formNo = Registration::formNo();
        $registration->full_name = $data['full_name'] ?? null;
        $registration->father_husband_name = $data['father_husband_name'] ?? null;
        $registration->date_of_birth = $data['date_of_birth'] ?? null;
        $registration->gender = $data['gender'] ?? null;
        $registration->marital_status = $data['marital_status'] ?? null;
        $registration->c_n_i_c = $data['c_n_i_c'] ?? null;
        $registration->passport_no = $data['passport_no'] ?? null;
        $registration->religion = $data['religion'] ?? null;
        $registration->nationality = $data['nationality'] ?? null;
        $registration->blood_group = $data['blood_group'] ?? null;
        $registration->preferred_learning_method = $data['preferred_learning_method'] ?? null;
        $registration->residential_address = $data['residential_address'] ?? null;
        $registration->postal_code = $data['postal_code'] ?? null;
        $registration->city = $data['city'] ?? null;
        $registration->country = $data['country'] ?? null;
        $registration->telephone = $data['telephone'] ?? null;
        $registration->code = $data['code'] ?? null;
        $registration->phone = $data['phone'] ?? null;
        $registration->personal_email = $data['personal_email'] ?? null;
        $registration->educational_qualification = $data['educational_qualification'] ?? null;
        $registration->employment_status = $data['employment_status'] ?? null;
        $registration->business_type_designation = $data['business_type_designation'] ?? null;
        $registration->business_name = $data['business_name'] ?? null;
        $registration->official_address = $data['official_address'] ?? null;
        $registration->official_telephone = $data['official_telephone'] ?? null;
        $registration->institutional_email = $data['institutional_email'] ?? null;
        $registration->activity_type = $data['activity_type'] ?? null;
        $registration->activity_title = $data['activity_title'] ?? null;
        $registration->is_paid = $data['is_paid'] ?? null;
        $registration->course_fee = $data['course_fee'] ?? null;
        $registration->course_tax = $data['course_tax'] ?? null;
        $registration->sponsor_name = $data['sponsor_name'] ?? null;
        $registration->contact_person = $data['contact_person'] ?? null;
        $registration->sponsor_mobile = $data['sponsor_mobile'] ?? null;
        $registration->sponsor_email = $data['sponsor_email'] ?? null;
        $registration->sponsor_address = $data['sponsor_address'] ?? null;
        $registration->certificate_nominal_fee = $data['certificate_nominal_fee'] ?? null;
        $registration->certificate_charge = $data['certificate_charge'] ?? null;
        $registration->emergency_name = $data['emergency_name'] ?? null;
        $registration->emergency_relationship = $data['emergency_relationship'] ?? null;
        $registration->emergency_mobile_no = $data['emergency_mobile_no'] ?? null;
        $registration->class_id = $data['classId'];

        /** @var \Illuminate\Http\UploadedFile * */
        $file = $request->file('file');
        if (null !== $file) {
            $path = SaveImage::save($file);
            $registration->file = $path;
        }

        $registration->save();

        if ($registration) {
            $registration->form_no = $registration->id + $formNo;
            $registration->save();
        }

        flash('Registration submitted')->success()->important();

        return redirect()->back();
    }

}
