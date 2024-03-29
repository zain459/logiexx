<?php

namespace Logixs\Modules\Event\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Logixs\Modules\Event\Models\Event;
use Logixs\Services\SaveImage;

class EventUpdateController extends Controller
{
    public function __invoke(Request $request, int $id)
    {
        $data = $this->validate($request, [
            'title' => ['required', 'string', 'max:100'],
            'description' => ['required', 'string'],
            'startDate' => ['required', 'date'],
            'endDate' => ['required', 'date'],
            'link' => ['nullable', 'url'],
            'image' => ['nullable'],
        ]);
        /** @var Event $event */
        $event = Event::query()->findOrFail($id);
        $event->title = $data['title'];
        $event->description = $data['description'];
        $event->start_date = $data['startDate'];
        $event->end_date = $data['endDate'];
        $event->link = $data['link'];
        if (isset($data['image'])) {
            /** @var \Illuminate\Http\UploadedFile * */
            $file = $request->file('image');
            $path = SaveImage::save($file);
            $event->image = $path;
        }
        $event->save();

        flash('Event Updated')->success()->important();

        return redirect()->route('event-index');
    }
}
