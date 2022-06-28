<?php

namespace App\Http\Controllers\Admin\Partner;

use App\Models\SubjectArea\Partner\Partner;

class PartnerIndexController
{
    public function __invoke()
    {
        $partners = Partner::query()->where('status', true)->get();

        return view('admin.partner.index', [
            'partners' => $partners,
        ]);
    }
}
