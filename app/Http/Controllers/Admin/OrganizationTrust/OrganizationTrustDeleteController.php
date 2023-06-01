<?php

namespace App\Http\Controllers\Admin\OrganizationTrust;

use App\Http\Controllers\Controller;
use App\Models\OrganizationTrust\OrganizationTrust;

class OrganizationTrustDeleteController extends Controller
{
    public function __invoke(int $id)
    {
        $organizationTrust = OrganizationTrust::query()->findOrFail($id);
        $organizationTrust->delete();

        flash('Organization Trust Deleted')->error()->important();

        return redirect(route('organization-trust.index'));
    }
}
