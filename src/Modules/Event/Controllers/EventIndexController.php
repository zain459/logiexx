<?php

namespace Logixs\Modules\Event\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Logixs\Modules\Event\Models\Event;

class EventIndexController
{
    public function __invoke(Request $request)
    {
        $query = Event::query();
        if (null !== $request->get('key')) {
            $query->where(function ($q) use ($request) {
                $q
                    ->orWhere('title', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('description', 'like', '%' . $request->get('key') . '%');
            });
        }
        if (null !== $request->get('date-filter')) {
            $query->where(function ($q) use ($request) {
                $q
                    ->orWhere('start_date', 'like', '%' . Str::between($request->get('date-filter'), '"', ' ') . '%')
                    ->orWhere('end_date', 'like', '%' . Str::between($request->get('date-filter'), ' ', '"') . '%');
            });
        }

        $events = $query->paginate(10);

        return view('event.index', [
            'events' => $events,
        ]);
    }
}
