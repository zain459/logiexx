<?php

namespace Logixs\Modules\Course\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Logixs\Modules\Course\Models\Course;
use Logixs\Modules\Course\Models\CoreFeatureSection;

class CoreFeatureSectionController extends Controller
{
    public function __invoke(int $id, Request $request)
    {
        /** @var Course $course */
        $course = Course::query()->findOrFail($id);
        $query = CoreFeatureSection::query()->where('course_id', $course->id());
        if (null !== $request->get('key')) {
            $query->where(function ($q) use ($request) {
                $q
                    ->orWhere('sub_heading', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('description', 'like', '%' . $request->get(strip_tags('key')) . '%');
            });
        }
        $codeFeatureSections = $query->paginate(10);
        return view('course.core-feature-section-index', [
            'course' => $course,
            'codeFeatureSections' => $codeFeatureSections
        ]);
    }
}
