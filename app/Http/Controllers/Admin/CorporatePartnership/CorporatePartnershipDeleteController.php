<?php

namespace App\Http\Controllers\Admin\CorporatePartnership;

use App\Models\CorporatePartnership;

class CorporatePartnershipDeleteController
{
    public function __invoke(int $id)
    {
        $corporatePartnership = CorporatePartnership::query()->findOrFail($id);

        $corporatePartnership->delete();
        flash('Delete')->success()->important();

        return redirect()->route('admin.corporate-partnership.index');
    }
}
