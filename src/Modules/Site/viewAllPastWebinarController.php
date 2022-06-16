<?php

namespace Logixs\Modules\Site;

use Carbon\Carbon;
use Logixs\Modules\Webinar\Models\Webinar;

class viewAllPastWebinarController
{
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        $pastWebinars = Webinar::where('start_date', '<', Carbon::now()->format('Y-m-d'))->paginate(2);

        return view('site.past-webinar-series', [
            'pastWebinars' => $pastWebinars
        ]);
    }
}
