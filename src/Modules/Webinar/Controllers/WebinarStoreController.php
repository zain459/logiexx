<?php

namespace Logixs\Modules\Webinar\Controllers;

use Illuminate\Http\Request;
use Logixs\Services\SaveImage;
use App\Http\Controllers\Controller;
use Logixs\Modules\Webinar\Models\Webinar;

class WebinarStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $this->validate($request, [
            'title' => ['required'],
            'speaker' => ['required'],
            'moderator' => ['required'],
            'sponsor' => ['required'],
            'organization' => ['required'],
            'focal_person' => ['required'],
            'focal_person_telephone' => ['required'],
            'focal_person_email' => ['required'],
            'link' => ['required'],
            'meeting_id' => ['required'],
            'start_date' => ['required'],
            'end_date' => ['required'],
            'passcode'=>['required'],
            'image'=>['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'link_image'=>['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'short_description'=>['required', 'string']
        ]);

        /** @var \Illuminate\Http\UploadedFile * */
        $file = $request->file('image');
        $file1 = $request->file('link_image');
        $path = SaveImage::save($file);
        $path1 = SaveImage::save($file1);

        $webinar = new Webinar();
        $webinar->title = $data['title'];
        $webinar->speaker = $data['speaker'];
        $webinar->moderator = $data['moderator'];
        $webinar->organization = $data['organization'];
        $webinar->sponsor = $data['sponsor'];
        $webinar->focal_person = $data['focal_person'];
        $webinar->focal_person_telephone = $data['focal_person_telephone'];
        $webinar->link = $data['link'];        $webinar->focal_person_email = $data['focal_person_email'];

        $webinar->meeting_id = $data['meeting_id'];
        $webinar->start_date = $data['start_date'];
        $webinar->end_date = $data['end_date'];
        $webinar->passcode = $data['passcode'];
        $webinar->image = $path;
        $webinar->link_image = $path1;
        $webinar->short_description = $data['short_description'];
        $webinar->save();

        flash('webinar added')->success();
        return redirect()->route('webinar-edit', $webinar->id());
    }
}
