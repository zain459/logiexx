<?php

namespace App\Http\Controllers\Site\BecomeAnInstructor\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BecomeAnInstructor;
use Illuminate\Http\Request;
use Logixs\Services\SaveImage;

class BecomeAnInstructorStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $this->validate($request, [
            'title' => ['required', 'string'],
            'first_name' => ['required', 'string'],
            'middle_name' => ['nullable', 'string'],
            'last_name' => ['required', 'string'],
            'degree' => ['required', 'string'],
            'telephone' => ['required', 'string'],
            'email' => ['required', 'string'],
            'address' => ['nullable', 'string'],
            'city' => ['required', 'string'],
            'post_code' => ['required', 'string'],
            'province' => ['required', 'string'],
            'country' => ['required', 'string'],
            'teaching_interest' => ['required', 'array'],
            'subject_areas' => ['required', 'array'],
            'tentative_course_title' => ['nullable','string'],
            'available_to_start_work' => ['required', 'string'],
            'date' => ['required', 'string'],
            'file' => ['required', 'mimes:pdf,doc,docx', 'max:2048'],
        ]);

        $becomeAnInstructor = new BecomeAnInstructor();
        $becomeAnInstructor->title = $data['title'];
        $becomeAnInstructor->first_name = $data['first_name'];
        $becomeAnInstructor->middle_name = $data['middle_name'];
        $becomeAnInstructor->last_name = $data['last_name'];
        $becomeAnInstructor->degree = $data['degree'];
        $becomeAnInstructor->telephone = $data['telephone'];
        $becomeAnInstructor->email = $data['email'];
        $becomeAnInstructor->address = $data['address'];
        $becomeAnInstructor->city = $data['city'];
        $becomeAnInstructor->post_code = $data['post_code'];
        $becomeAnInstructor->province = $data['province'];
        $becomeAnInstructor->country = $data['country'];
        $becomeAnInstructor->teaching_interest = implode(',', $data['teaching_interest']);
        $becomeAnInstructor->subject_areas = implode(',', $data['subject_areas']);
        $becomeAnInstructor->tentative_course_title = $data['tentative_course_title'];
        $becomeAnInstructor->available_to_start_work = $data['available_to_start_work'];
        $becomeAnInstructor->date = $data['date'];
        /** @var \Illuminate\Http\UploadedFile * */
        $file = $request->file('file');
        $path = SaveImage::save($file);
        $becomeAnInstructor->file = $path;
        $becomeAnInstructor->save();
        flash('Successfully Submitted')->success()->important();

        return redirect()->back();
    }
}
