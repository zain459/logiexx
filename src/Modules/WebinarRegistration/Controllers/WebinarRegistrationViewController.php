<?php

namespace Logixs\Modules\WebinarRegistration\Controllers;

use Logixs\Modules\Site\WebinarRegistrationForm\Models\WebinarRegistrationForm;

class WebinarRegistrationViewController
{
    public function __invoke(int $id)
    {
        $webinarRegistration = WebinarRegistrationForm::query()->findOrFail($id);

        return view('admin.webinar-registration.view', [
            'webinarRegistration' => $webinarRegistration
        ]);
    }
}
