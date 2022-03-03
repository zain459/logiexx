<?php

namespace Logixs\Modules\Inventory\Controllers;

use App\Http\Controllers\Controller;

class InventoryDashboardController extends Controller
{
    public function __invoke()
    {
        return view('inventory.dashboard');
    }
}
