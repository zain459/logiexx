<?php

namespace App\Http\Controllers\Site\Event;

use App\Http\Controllers\Controller;
use Logixs\Modules\Event\Models\Event;

class EventDetailController extends Controller
{
    public function __invoke(int $id)
    {
        $event = Event::query()->findOrFail($id);
        if ($event === null) {
            abort(404, 'event not found');
        }

        return view('site.event.detail', [
            'event' => $event
        ]);
    }
}
