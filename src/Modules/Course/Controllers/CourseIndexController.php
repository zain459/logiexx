<?php

namespace Logixs\Modules\Course\Controllers;

use App\Models\Category\Category;
use App\Models\SubjectArea\SubjectArea;
use Illuminate\Http\Request;
use Logixs\Modules\Course\Models\Course;
use Logixs\Modules\Course\Models\Modality;
use Logixs\Modules\Course\Query\GetCourse;

class CourseIndexController
{
    public function __invoke(Request $request)
    {
        $query = Course::with(['category', 'subjectArea']);

        if (null !== $request->get('key')) {
            $query->where(function ($q) use ($request) {
                $q
                    ->orWhere('course_code', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('title', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('overview', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('description', 'like', '%' . $request->get('key') . '%');
            });
        }

        if (null !== $request->get('subjectArea')) {
            $query->where('subject_area_id', $request->get('subjectArea'));
        }

        if (null !== $request->get('modality')) {
            $query->where('modality', $request->get('modality'));
        }
        if (null !== $request->get('category')) {
            $query->where('category_id', 'like', '%' . $request->get('category') . '%');
        }

        $courses = $query->paginate(10);

        $subjectAreas = SubjectArea::all();
        $modalities = Modality::all();
        $categories = Category::all();

        return view('course.index', [
            'courses' => $courses,
            'subjectAreas' => $subjectAreas,
            'modalities' => $modalities,
            'categories' => $categories
        ]);
    }
}
