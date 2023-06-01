<?php

namespace App\Http\Controllers\Admin\OrganizationTrust;

use App\Models\OrganizationTrust\OrganizationTrust;

class OrganizationTrustIndexController
{
    public function __invoke()
    {
        $organizationTrusts = OrganizationTrust::all();

        return view('admin.organization-trust.index', [
            'organizationTrusts' => $organizationTrusts
        ]);
    }
}
