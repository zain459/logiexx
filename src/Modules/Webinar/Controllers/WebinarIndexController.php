<?php

namespace Logixs\Modules\Webinar\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Logixs\Modules\Webinar\Models\Webinar;

class WebinarIndexController
{
    public function __invoke(Request $request)
    {
        $query = Webinar::query();

        if (null !== $request->get('key')) {
            $query->where(function ($q) use ($request) {
                $q
                    ->orWhere('title', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('speaker', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('moderator', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('organization', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('sponsor', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('focal_person', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('focal_person_telephone', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('focal_person_email', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('short_description', 'like', '%' . $request->get('key') . '%');
            });
        }
        if (null !== $request->get('date')) {
            $query->where(function ($q) use ($request) {
                $q
                    ->orWhere('start_date', 'like', '%' . Str::between($request->get('date'), '"', ' ') . '%')
                    ->orWhere('end_date', 'like', '%' . Str::between($request->get('date'), ' ', '"') . '%');
            });
        }

        $webinars = $query->paginate(10);

        return view('webinar.index', [
            'webinars' => $webinars
        ]);
    }
}
