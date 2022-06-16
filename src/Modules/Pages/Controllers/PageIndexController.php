<?php

namespace Logixs\Modules\Pages\Controllers;

use Logixs\Modules\Course\Models\Course;
use Logixs\Modules\Pages\Models\Pages;

class PageIndexController
{
    public function __invoke()
    {
        $pages = Pages::all();

        return view('pages.index', [
            'pages' => $pages
        ]);
    }
}
