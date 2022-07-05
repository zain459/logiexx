<?php

namespace Logixs\Modules\WebinarRegistration\Controllers;

use Logixs\Modules\Site\WebinarRegistrationForm\Models\WebinarRegistrationForm;

class WebinarRegistrationIndex
{
    public function __invoke()
    {
        $webinarRegistrations = WebinarRegistrationForm::get();

        return view('admin.webinar-registration.index', [
            'webinarRegistrations' => $webinarRegistrations
        ]);
    }
}
