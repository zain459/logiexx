<?php

namespace App\Http\Controllers\Admin\Category;

use Logixs\Modules\Inventory\Model\Category;

class CategoryIndexController
{
    public function __invoke()
    {
        $categories = Category::all();

        return view('admin.category.index', [
            'categories' => $categories,
        ]);
    }
}
