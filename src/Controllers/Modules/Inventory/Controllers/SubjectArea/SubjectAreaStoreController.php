<?php

namespace Logixs\Controllers\Modules\Inventory\Controllers\SubjectArea;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Logixs\Controllers\Modules\Inventory\Model\SubjectArea;

class SubjectAreaStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $this->validate($request, [
            'name' => ['required', 'string', 'unique:subject_areas,name'],
        ]);
        $cat = new SubjectArea();
        $cat->name = $data['name'];
        $cat->save();

        flash('subject area added')->success();

        return redirect(route('inventory.subject-index'));
    }
}
