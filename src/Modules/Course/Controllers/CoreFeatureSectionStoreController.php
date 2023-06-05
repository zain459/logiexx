<?php

namespace Logixs\Modules\Course\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Logixs\Modules\Course\Models\CoreFeatureSection;
use Logixs\Services\SaveImage;

class CoreFeatureSectionStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $this->validate($request, [
            'sub_heading' => ['required', 'string'],
            'description' => ['required', 'string'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg'],
            'courseId' => ['required', 'int', 'exists:courses,id'],
        ]);
        /** @var \Illuminate\Http\UploadedFile * */
        $file = $request->file('image');
        $path = SaveImage::save($file);
        $coreFeatureSection = new CoreFeatureSection();
        $coreFeatureSection->sub_heading = $data['sub_heading'];
        $coreFeatureSection->description = $data['description'];
        $coreFeatureSection->course_id = $data['courseId'];
        $coreFeatureSection->image = $path;
        $coreFeatureSection->save();

        flash('Core Feature Added')->success()->important();

        return redirect(route('core-feature-section.index', $coreFeatureSection->courseId()));
    }
}
