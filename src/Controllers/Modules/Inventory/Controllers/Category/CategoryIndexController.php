<?php

namespace Logixs\Controllers\Modules\Inventory\Controllers\Category;

use Logixs\Controllers\Modules\Inventory\Model\Category;

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
