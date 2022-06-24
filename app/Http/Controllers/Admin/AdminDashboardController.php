<?php

namespace App\Http\Controllers\Admin;

class AdminDashboardController
{
    public function __invoke()
    {
        return view('admin.dashboard');
    }
}
