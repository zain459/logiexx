<?php

namespace Logixs\Modules\Webinar\Controllers;


use Illuminate\Http\Request;
use Logixs\Modules\Webinar\Models\Webinar;

class WebinarIndexController
{
    public function __invoke(Request $request)
    {
        $webinar = Webinar::query();

        if (null !== $request->get('title')) {
            $webinar->where('title', 'like', '%' . $request->get('title') . '%');
        }

        $webinars = $webinar->paginate(10);

        return view('webinar.index', [
            'webinars' => $webinars
        ]);
    }
}
