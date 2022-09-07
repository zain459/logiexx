<?php

namespace App\Http\Controllers\Admin\SubjectArea;

use App\Http\Controllers\Controller;
use App\Models\SubjectArea\SubjectArea;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
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
        if ($request->file('image')) {
            /** @var \Illuminate\Http\UploadedFile * */
            $file = $request->file('image');
            $path = SaveImage::save($file);
            $area->name = $data['name'];
            $area->image = $path;

        } else {
            $area->name = $data['name'];
        }
        $area->save();

        flash('Subject Area updated')->success()->important();

        return redirect()->route('admin.subject-area.index');
    }
}
