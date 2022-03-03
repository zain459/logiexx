<?php

namespace Logixs\Controllers\Modules\Inventory\Controllers\Category;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Logixs\Controllers\Modules\Inventory\Model\Category;

class CategoryUpdateController extends Controller
{
    public function __invoke(Request $request, int $id)
    {
        /** @var Category $cat */
        $cat = Category::query()->findOrFail($id);

        if (null === $cat) {
            abort(404, 'category not found');
        }

        $data = $this->validate($request, [
            'name' => ['required', Rule::unique('categories')->ignore($cat->id())],
        ]);

        $cat->name = $data['name'];
        $cat->save();

        flash('category updated')->success();

        return redirect()->route('inventory.category-index');
    }
}
