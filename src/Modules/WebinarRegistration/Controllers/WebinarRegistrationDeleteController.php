<?php

namespace Logixs\Modules\WebinarRegistration\Controllers;

use Logixs\Modules\Site\WebinarRegistrationForm\Models\WebinarRegistrationForm;

class WebinarRegistrationDeleteController
{
    public function __invoke(int $id)
    {
        WebinarRegistrationForm::query()->findOrFail($id)->delete();
        flash('Registration Removed')->error()->important();

        return redirect()->route('admin.webinar-registration.index');
    }
}
