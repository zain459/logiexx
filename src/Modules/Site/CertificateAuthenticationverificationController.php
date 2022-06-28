<?php

namespace Logixs\Modules\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Certificate\CertificateAuthentication;

class CertificateAuthenticationverificationController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $this->validate($request, [
            'name' => ['required', 'string'],
            'certificate_serial_number' => ['required', 'string'],
        ]);

        $certificateAuthentication = CertificateAuthentication::where('name', $data['name'])->where('verify_certificate', $data['certificate_serial_number'])->first();
        if (null !== $certificateAuthentication) {
            flash('Your Certificate has been verified. The issue date is:' . $certificateAuthentication->issueDate()->toDateString())->success();
        } else {
            flash('Your Certificate has not been verified')->error();
        }
        return redirect()->route('site.certificate-authentication.index');
    }
}
