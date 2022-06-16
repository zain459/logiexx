<?php

namespace Logixs\Modules\Site;

use Carbon\Carbon;
use Logixs\Modules\Webinar\Models\Webinar;

class ViewAllWebinarSeriesController
{
    public function __invoke()
    {
        $upComingWebinar = Webinar::where('start_date', '>=', Carbon::now()->format('Y-m-d'))->latest()->first();
        $pastWebinar = Webinar::where('start_date', '<', Carbon::now()->format('Y-m-d'))->first();

        return view('site.webinar-series', [
           'upComingWebinar' => $upComingWebinar,
            'pastWebinar' => $pastWebinar
        ]);
    }
}
