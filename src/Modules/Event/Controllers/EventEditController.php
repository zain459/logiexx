<?php

namespace Logixs\Modules\Event\Controllers;

use Logixs\Modules\Event\Models\Event;

class EventEditController
{
    public function __invoke(int $id)
    {
        $event = Event::query()->findOrFail($id);

        return view('event.edit', [
            'event' => $event,
        ]);
    }
}
