<?php

namespace Logixs\Modules\Event\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Logixs\Modules\Event\Models\Event;
use Logixs\Services\SaveImage;

class EventStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $this->validate($request, [
            'title' => ['required', 'string', 'max:100'],
            'description' => ['required', 'string', 'max:191'],
            'startDate' => ['required', 'date'],
            'endDate' => ['required', 'date'],
            'link' => ['nullable', 'url'],
            'image' => ['nullable'],
        ]);

        /** @var \Illuminate\Http\UploadedFile * */
        $file = $request->file('image');
        $path = SaveImage::save($file);

        $event = new Event();
        $event->title = $data['title'];
        $event->description = $data['description'];
        $event->start_date = $data['startDate'];
        $event->end_date = $data['endDate'];
        $event->link = $data['link'];
        $event->image = $path;
        $event->save();

        flash('Event Created')->success()->important();

//        return response()->json(['event' => $event]);
        return redirect()->route('event-index');
    }
}
