<?php

namespace Logixs\Modules\WebinarRegistration\Controllers;

use Illuminate\Http\Request;
use Logixs\Modules\Site\WebinarRegistrationForm\Models\WebinarRegistrationForm;

class WebinarRegistrationIndex
{
    public function __invoke(Request $request)
    {
//        dd($request->all());
        $webinarRegistration = WebinarRegistrationForm::query();

        if (null !== $request->get('first_name')) {
            $webinarRegistration->where('first_name', 'like', '%' . $request->get('first_name') . '%');
        }

        if (null !== $request->get('organization_name')) {
            $webinarRegistration->where('organization_name', 'like', '%' . $request->get('organization_name') . '%');
        }

        $webinarRegistrations = $webinarRegistration->paginate(10);

        return view('admin.webinar-registration.index', [
            'webinarRegistrations' => $webinarRegistrations,
        ]);
    }
}
