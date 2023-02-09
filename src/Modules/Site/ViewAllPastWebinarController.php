<?php

namespace Logixs\Modules\Site;

use Carbon\Carbon;
use App\Models\SubjectArea\SubjectArea;
use Logixs\Modules\Webinar\Models\Webinar;

class ViewAllPastWebinarController
{
    public function __invoke(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        // TODO: Implement __invoke() method.
        $pastWebinars = Webinar::query()->where('start_date', '<', Carbon::now()->format('Y-m-d'))->paginate(2);
        $subjectFields = SubjectArea::all();

        return view('site.past-webinar-series', [
            'pastWebinars' => $pastWebinars,
            'subjectFields' => $subjectFields,
        ]);
    }
}
