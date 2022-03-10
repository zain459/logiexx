<?php

namespace Logixs\Modules\Event\Controllers;

use Logixs\Modules\Event\Models\Event;

class EventIndexController
{
    public function __invoke()
    {
        $events = Event::all();

        return view('event.index', [
            'events' => $events,
        ]);
    }
}
