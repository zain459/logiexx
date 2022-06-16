<?php

namespace Logixs\Modules\Inventory\Controllers\SubjectArea;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Logixs\Modules\Inventory\Model\SubjectArea;
use Logixs\Services\SaveImage;

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
            'image' => ['nullable', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);
        /** @var \Illuminate\Http\UploadedFile * */
        $file = $request->file('image');
        $path = SaveImage::save($file);
        $area->name = $data['name'];
        $area->image = $path;

        $area->save();

        flash('category updated')->success();

        return redirect()->route('inventory.subject-index');
    }
}
