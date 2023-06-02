<?php

namespace App\Http\Controllers\Site\Event;

use App\Http\Controllers\Controller;
use Logixs\Modules\Event\Models\Event;

class EventShowController extends Controller
{
    public function __invoke()
    {
        $events = Event::orderBy('start_date', 'desc')->get();

        return view('site.event.show', [
            'events' => $events
        ]);
    }
}
