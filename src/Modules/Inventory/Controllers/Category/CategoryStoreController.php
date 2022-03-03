<?php

namespace Logixs\Modules\Inventory\Controllers\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Logixs\Modules\Inventory\Model\Category;

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

        flash('category added')->success();

        return redirect(route('inventory.category-index'));
    }
}
