<?php

namespace Logixs\Modules\Event\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Logixs\Modules\Event\Models\Event;

class EventUpdateController extends Controller
{
    public function __invoke(Request $request, int $id)
    {
        $data = $this->validate($request, [
            'title' => ['required', 'string', 'max:100'],
            'description' => ['required', 'string', 'max:191'],
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
            $event->image = $data['image'];
        }
        $event->save();

        flash('Event Updated')->success();

        return redirect()->route('event-index');
    }
}
