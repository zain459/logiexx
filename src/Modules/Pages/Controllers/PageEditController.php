<?php

namespace Logixs\Modules\Pages\Controllers;

use Logixs\Modules\Pages\Models\Pages;

class PageEditController
{
    public function __invoke(int $id)
    {
        $page = Pages::query()->findOrFail($id);

        return view('pages.edit', [
            'page' => $page,
        ]);
    }
}
