<?php

namespace Logixs\Modules\Course\Controllers;

use App\Http\Controllers\Controller;
use Logixs\Modules\Course\Models\CoreFeatureSection;

class CoreFeatureSectionEditController extends Controller
{
    public function __invoke(int $id)
    {
        $coreFeatureSection = CoreFeatureSection::query()->with('course')->findOrFail($id);

        return view('course.core-feature-section-edit', [
            'coreFeatureSection' => $coreFeatureSection
        ]);
    }
}
