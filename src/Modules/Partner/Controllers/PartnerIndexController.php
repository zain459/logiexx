<?php

namespace Logixs\Modules\Partner\Controllers;

use Logixs\Modules\Partner\Models\Partner;

class PartnerIndexController
{
    public function __invoke()
    {
        $partners = Partner::query()->where('status', true)->get();

        return view('partner.index', [
            'partners' => $partners,
        ]);
    }
}
