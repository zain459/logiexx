<?php

namespace App\Http\Controllers\Admin\Category;

use App\Models\Category\Category;

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
