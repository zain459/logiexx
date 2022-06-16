<?php

namespace Logixs\Modules\Site;

use Carbon\Carbon;
use Logixs\Modules\Webinar\Models\Webinar;

class ViewAllUpcomingWebinarController
{
    public function __invoke()
    {
        $upcomingWebinars = Webinar::where('start_date', '>=', Carbon::now()->format('Y-m-d'))->paginate(2);

        return view('site.upcoming-webinar-series', [
            'upcomingWebinars' => $upcomingWebinars
        ]);

    }
}
