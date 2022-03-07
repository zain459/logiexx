<?php

namespace Logixs\Modules\User\Controllers;

class AdminDashboardController
{
    public function __invoke()
    {
        return view('dashboard');
    }
}
