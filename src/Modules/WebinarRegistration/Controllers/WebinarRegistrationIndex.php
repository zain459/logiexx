<?php

namespace Logixs\Modules\WebinarRegistration\Controllers;

use Illuminate\Http\Request;
use Logixs\Modules\Site\WebinarRegistrationForm\Models\WebinarRegistrationForm;

class WebinarRegistrationIndex
{
    public function __invoke(Request $request)
    {
        $query = WebinarRegistrationForm::query();

        if (null !== $request->get('key')) {
            $query->where(function ($q) use ($request) {
                $q
                    ->orWhere('first_name', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('last_name', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('work_email', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('phone_number', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('organization_name', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('occupation_type', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('subject_area', 'like', '%' . $request->get('key') . '%');
            });
        }

        if (null !== $request->get('status')) {
            $query->where('status', 'like', '%' . $request->get('status') . '%');
        }

        $webinarRegistrations = $query->paginate(10);

        return view('admin.webinar-registration.index', [
            'webinarRegistrations' => $webinarRegistrations,
        ]);
    }
}
