<?php

namespace Logixs\Modules\Inventory\Controllers\Category;

use Logixs\Modules\Inventory\Model\Category;

class CategoryIndexController
{
    public function __invoke()
    {
        $categories = Category::all();

        return view('inventory.category.index', [
            'categories' => $categories,
        ]);
    }
}
