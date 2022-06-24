<?php

namespace App\Http\Controllers\Admin\SubjectArea;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Logixs\Modules\Inventory\Model\SubjectArea;
use Logixs\Services\SaveImage;

class SubjectAreaStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $this->validate($request, [
            'name' => ['required', 'string', 'unique:subject_areas,name'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        /** @var \Illuminate\Http\UploadedFile * */
        $file = $request->file('image');
        $path = SaveImage::save($file);
        $cat = new SubjectArea();
        $cat->name = $data['name'];
        $cat->image = $path;
        $cat->save();

        flash('subject area added')->success();

        return redirect(route('admin.subject-area.index'));

    }
}
