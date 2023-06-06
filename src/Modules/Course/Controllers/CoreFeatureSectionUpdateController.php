<?php

namespace Logixs\Modules\Course\Controllers;

use Illuminate\Http\Request;
use Logixs\Services\SaveImage;
use App\Http\Controllers\Controller;
use Logixs\Modules\Course\Models\CoreFeatureSection;

class CoreFeatureSectionUpdateController extends Controller
{
    public function __invoke(int $id, Request $request)
    {
        /** @var CoreFeatureSection $area */
        $coreFeatureSection = CoreFeatureSection::query()->findOrFail($id);

        if (null === $coreFeatureSection) {
            abort(404, 'core feature not found');
        }

        $data = $this->validate($request, [
            'sub_heading' => ['required', 'string'],
            'description' => ['required', 'string'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg'],
            'courseId' => ['required', 'int', 'exists:courses,id'],
        ]);

        $coreFeatureSection->sub_heading = $data['sub_heading'];
        $coreFeatureSection->description = $data['description'];
        if (isset($data['image'])) {
            /** @var \Illuminate\Http\UploadedFile * */
            $file = $request->file('image');
            $path = SaveImage::save($file);
            $coreFeatureSection->image = $path;
        }

        $coreFeatureSection->save();

        flash('successfully update')->success()->important();

        return redirect(route('core-feature-section.index', $coreFeatureSection->courseId()));
    }
}
