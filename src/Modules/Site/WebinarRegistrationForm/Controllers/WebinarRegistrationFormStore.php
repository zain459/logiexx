<?php

namespace Logixs\Modules\Site\WebinarRegistrationForm\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Logixs\Modules\Site\WebinarRegistrationForm\Models\WebinarRegistrationForm;
use Logixs\Services\SaveImage;

class WebinarRegistrationFormStore extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $this->validate($request, [
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'work_email' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
            'organization_name' => ['string'],
            'occupation_type' => ['string'],
            'subject_area' => ['required', 'array'],
            'hear_about_webinar' => ['required', 'string'],
            'verifiable_certificate' => ['string'],
            'description' => ['string'],
            'file' => ['required', 'mimes:jpeg,png,jpg', 'max:2048'],
        ]);

        $webinarRegistration = new WebinarRegistrationForm();

        $webinarRegistration->first_name = $data['first_name'];
        $webinarRegistration->last_name = $data['last_name'];
        $webinarRegistration->work_email = $data['work_email'];
        $webinarRegistration->phone_number = $data['phone_number'];
        $webinarRegistration->organization_name = $data['organization_name'];
        $webinarRegistration->occupation_type = $data['occupation_type'];
        $webinarRegistration->subject_area = implode(',', $data['subject_area']);
        $webinarRegistration->hear_about_webinar = $data['hear_about_webinar'];
        $webinarRegistration->verifiable_certificate = $data['verifiable_certificate'];
        $webinarRegistration->description = $data['description'];
        /** @var \Illuminate\Http\UploadedFile * */
        $file = $request->file('file');
        $path = SaveImage::save($file);
        $webinarRegistration->file = $path;

        $webinarRegistration->save();
        flash('Successfully Submitted')->success();

        return redirect()->route('site.webinar-registration-form');
    }
}
