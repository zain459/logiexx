<?php

namespace App\Http\Controllers\Admin\CorporatePartnership;

use Logixs\Modules\Site\CorporatePartnership\Models\CorporatePartnership;

class CorporatePartnershipDeleteController
{
    public function __invoke(int $id)
    {
        $corporatePartnership = CorporatePartnership::query()->findOrFail($id);
        $corporatePartnership->delete();

        flash('Delete')->success();
        return redirect()->route('admin.corporate-partnership.index');
    }
}
