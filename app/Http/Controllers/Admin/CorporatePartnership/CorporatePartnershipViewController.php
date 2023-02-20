<?php

namespace App\Http\Controllers\Admin\CorporatePartnership;

use App\Models\CorporatePartnership;

class CorporatePartnershipViewController
{
    public function __invoke(int $id)
    {
        $corporatePartnership = CorporatePartnership::findOrFail($id);

        return view('admin.corporate-partnership.view', [
            'corporatePartnership' => $corporatePartnership
        ]);

    }
}
