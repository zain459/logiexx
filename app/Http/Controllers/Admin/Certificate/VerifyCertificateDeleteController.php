<?php

namespace App\Http\Controllers\Admin\Certificate;

use App\Models\Certificate\CertificateAuthentication;

class VerifyCertificateDeleteController
{
    public function __invoke(int $id)
    {
        $verifyCertificateAuthentication = CertificateAuthentication::findOrFail($id);
        $verifyCertificateAuthentication->delete();
        flash('Deleted Successfully')->error()->important();

        return redirect()->back();
    }
}
