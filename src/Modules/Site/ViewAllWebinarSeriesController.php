<?php

namespace Logixs\Modules\Site;

use Carbon\Carbon;
use App\Models\SubjectArea\SubjectArea;
use Logixs\Modules\Webinar\Models\Webinar;

class ViewAllWebinarSeriesController
{
    public function __invoke()
    {
        $upComingWebinar = Webinar::where('start_date', '>=', Carbon::now()->format('Y-m-d'))->latest()->first();
        $pastWebinar = Webinar::where('start_date', '<', Carbon::now()->format('Y-m-d'))->first();
        $subjectFields = SubjectArea::all();

        return view('site.webinar-series', [
            'pastWebinar' => $pastWebinar,
            'subjectFields' => $subjectFields,
            'upComingWebinar' => $upComingWebinar,
        ]);
    }
}
