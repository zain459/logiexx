<?php

namespace Logixs\Controllers\Modules\Inventory\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Logixs\Controllers\Modules\Inventory\Model\Category;


class CategoryStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $this->validate($request, [
            'name' => ['required','string', 'unique:categories,name'],
        ]);
        $cat = new Category();
        $cat->name = $data['name'];
        $cat->save();

//        flash('item category added')->success();

        return redirect()->route('inventory.category-index');

    }

}
