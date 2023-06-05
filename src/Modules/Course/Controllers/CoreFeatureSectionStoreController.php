<?php

namespace Logixs\Modules\Course\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Logixs\Modules\Course\Models\CoreFeatureSection;

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

        $coreFeatureSection = new CoreFeatureSection();
        $coreFeatureSection->sub_heading = $data['sub_heading'];
        $coreFeatureSection->description = $data['description'];
        $coreFeatureSection->course_id = $data['courseId'];
        $coreFeatureSection->image = $data['image'];
        $coreFeatureSection->save();

        flash('Core Feature Added')->success()->important();

        return redirect(route('core-feature-section.index', $coreFeatureSection->courseId()));
    }
}
