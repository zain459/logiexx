<?php

namespace App\Http\Controllers\Admin\Certificate;

use App\Models\Certificate\CertificateAuthentication;

class VerifyCertificateEditController
{
    public function __invoke(int $id)
    {
        $verifyCertificateAuthentication = CertificateAuthentication::query()->findOrFail($id);

        return view('admin.verify-certificate.edit', [
            'verifyCertificateAuthentication' => $verifyCertificateAuthentication
        ]);
    }
}
