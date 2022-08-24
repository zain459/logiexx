<?php

namespace Logixs\Modules\WebinarRegistration\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Logixs\Modules\Site\WebinarRegistrationForm\Models\WebinarRegistrationForm;

class WebinarRegistrationStatusStoreController extends Controller
{
    public function __invoke(int $id, Request $request)
    {
        $webinarRegistrationStatus = WebinarRegistrationForm::query()->findOrFail($id);
        if ($request->has('status') == 1) {
            $webinarRegistrationStatus->status = $request->has('status');
            $webinarRegistrationStatus->save();

            flash('Registration Approved')->success()->important();
            return redirect()->route('admin.webinar-registration.index');
        }
        if ($request->has('status') == 0) {
            $webinarRegistrationStatus->status = $request->has('status');
            $webinarRegistrationStatus->save();

            flash('Registration UnApproved')->error()->important();
            return redirect()->route('admin.webinar-registration.index');
        }
    }
}
