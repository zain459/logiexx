<?php

namespace Logixs\Controllers\Modules\Inventory\Controllers\SubjectArea;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Logixs\Controllers\Modules\Inventory\Model\SubjectArea;

class SubjectAreaUpdateController extends Controller
{
    public function __invoke(Request $request, int $id)
    {
        /** @var SubjectArea $area */
        $area = SubjectArea::query()->findOrFail($id);

        if (null === $area) {
            abort(404, 'category not found');
        }

        $data = $this->validate($request, [
            'name' => ['required', Rule::unique('subject_areas')->ignore($area->id())],
        ]);

        $area->name = $data['name'];
        $area->save();

        flash('category updated')->success();

        return redirect()->route('inventory.category-index');
    }
}
