<?php

namespace Logixs\Modules\Event\Controllers;

use Logixs\Modules\Event\Models\Event;

class EventDeleteController
{
    public function __invoke(int $id)
    {
        Event::query()->findOrFail($id)->delete();
        flash('Event deleted')->error()->important();

        return redirect()->back();
    }
}
