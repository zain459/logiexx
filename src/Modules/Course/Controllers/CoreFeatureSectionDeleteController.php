<?php

namespace Logixs\Modules\Course\Controllers;

use App\Http\Controllers\Controller;
use Logixs\Modules\Course\Models\CoreFeatureSection;

class CoreFeatureSectionDeleteController extends Controller
{
    public function __invoke(int $id)
    {
        $coreFeatureCourse = CoreFeatureSection::query()->findOrFail($id);
        $coreFeatureCourse->delete();

        flash('Core Feature Section Deleted')->error()->important();

        return redirect()->back();


    }
}
