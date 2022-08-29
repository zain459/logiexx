<?php

namespace Logixs\Modules\Webinar\Controllers;

use Illuminate\Http\Request;
use Logixs\Services\SaveImage;
use App\Http\Controllers\Controller;
use Logixs\Modules\Webinar\Models\Webinar;

class WebinarUpdateController extends Controller
{
    public function __invoke(Request $request, int $id)
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
            'passcode' => ['required'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'link_image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'short_description' => ['required', 'string'],
        ]);

        $webinar = Webinar::query()->findOrFail($id);
        $webinar->title = $data['title'];
        $webinar->speaker = $data['speaker'];
        $webinar->moderator = $data['moderator'];
        $webinar->sponsor = $data['sponsor'];
        $webinar->organization = $data['organization'];
        $webinar->focal_person = $data['focal_person'];
        $webinar->focal_person_telephone = $data['focal_person_telephone'];
        $webinar->focal_person_email = $data['focal_person_email'];
        $webinar->link = $data['link'];
        $webinar->meeting_id = $data['meeting_id'];
        $webinar->start_date = $data['start_date'];
        $webinar->end_date = $data['end_date'];
        $webinar->passcode = $data['passcode'];
        $webinar->short_description = $data['short_description'];
        if (isset($data['image'])) {
            /** @var \Illuminate\Http\UploadedFile * */
            $file = $request->file('image');
            $path = SaveImage::save($file);
            $webinar->image = $path;
        }
        if (isset($data['link_image'])) {
            /** @var \Illuminate\Http\UploadedFile * */
            $file = $request->file('link_image');
            $path1 = SaveImage::save($file);
            $webinar->image = $path1;
        }
        $webinar->save();

        flash('Record updated')->success()->important();

        return redirect()->back();
    }
}
