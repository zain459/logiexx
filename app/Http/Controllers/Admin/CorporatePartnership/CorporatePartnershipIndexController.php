<?php

namespace App\Http\Controllers\Admin\CorporatePartnership;

use Logixs\Modules\Site\CorporatePartnership\Models\CorporatePartnership;

class CorporatePartnershipIndexController
{
    public function __invoke()
    {
        $corporatePartnerships = CorporatePartnership::all();

        return view('admin.corporate-partnership.index',[
            'corporatePartnerships' => $corporatePartnerships
        ]);
    }
}
