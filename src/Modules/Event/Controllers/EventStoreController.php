<?php

namespace Logixs\Modules\Event\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Logixs\Modules\Event\Models\Event;

class EventStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $this->validate($request, [
            'title' => ['required', 'string', 'max:100'],
            'description' => ['required', 'string', 'max:191'],
            'startDate' => ['required', 'date'],
            'endDate' => ['required', 'date'],
        ]);

        $event = new Event();
        $event->title = $data['title'];
        $event->description = $data['description'];
        $event->start_date = $data['startDate'];
        $event->end_date = $data['endDate'];
        $event->save();

        flash('Event Created')->success();

        return redirect()->route('event-index');
    }
}
