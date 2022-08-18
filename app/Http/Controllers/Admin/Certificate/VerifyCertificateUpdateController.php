<?php

namespace App\Http\Controllers\Admin\Certificate;

use App\Http\Controllers\Controller;
use App\Models\Certificate\CertificateAuthentication;
use Illuminate\Http\Request;

class VerifyCertificateUpdateController extends Controller
{
    public function __invoke(Request $request, int $id)
    {
        $data = $this->validate($request, [
            'name' => ['required', 'string'],
            'verify_certificate' => ['required', 'string'],
            'issue_date' => ['required', 'date'],
        ]);

        $verifyCertificateAuthentication = CertificateAuthentication::query()->findOrFail($id);
        $verifyCertificateAuthentication->name = $data['name'];
        $verifyCertificateAuthentication->verify_certificate = $data['verify_certificate'];
        $verifyCertificateAuthentication->issue_date = $data['issue_date'];

        $verifyCertificateAuthentication->save();
        flash('Certificate Authentication Updated')->success()->important();

        return redirect()->back();

    }
}
