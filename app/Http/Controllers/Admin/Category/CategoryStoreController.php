<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use Illuminate\Http\Request;

class CategoryStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $this->validate($request, [
            'name' => ['required', 'string', 'unique:categories,name'],
        ]);
        $cat = new Category();
        $cat->name = $data['name'];
        $cat->save();

        flash('category added')->success()->important();

        return redirect(route('admin.category.index'));
    }
}
