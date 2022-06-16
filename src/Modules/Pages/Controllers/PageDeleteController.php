<?php

namespace Logixs\Modules\Pages\Controllers;

use Logixs\Modules\Pages\Models\Pages;

class PageDeleteController
{
    public function __invoke(int $id)
    {
        $page = Pages::findOrFail($id);
        $page->delete();

        return redirect()->back();
    }
}
