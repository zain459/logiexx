<?php

namespace Logixs\Controllers\Modules\Inventory;

use App\Http\Controllers\Controller;

class InventoryDashboardController extends Controller
{
    public function __invoke()
    {
        return view('inventory.dashboard');
    }
}
