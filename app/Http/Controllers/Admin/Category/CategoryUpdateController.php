<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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

        flash('category updated')->success()->important();

        return redirect()->route('admin.category.index');
    }
}
