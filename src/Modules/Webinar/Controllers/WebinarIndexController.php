<?php

namespace Logixs\Modules\Webinar\Controllers;

use Logixs\Modules\Webinar\Models\Webinar;

class WebinarIndexController
{
    public function __invoke(){
        $webinars = Webinar::get();

        return view('webinar.index', [
            'webinars' => $webinars
        ]);
    }
}
