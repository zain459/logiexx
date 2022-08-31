<?php

namespace App\Http\Controllers\Admin\FeaturedCourse;

use App\Http\Controllers\Controller;
use App\Models\Course\FeaturedCourse;
use Illuminate\Http\Request;

class FeaturedCourseIndexController extends Controller
{
    public function __invoke(Request $request)
    {
        $query = FeaturedCourse::query()->with('course')->orderBy('id', 'DESC');
        if (null !== $request->get('key')) {
            $query->whereHas('course', function ($q) use ($request) {
                $q
                    ->where('title', 'like', '%' . $request->get('key') . '%');
            });
        }

        $featuredCourses = $query->paginate(10);

        return view('admin.feature-course.index', [
            'featuredCourses' => $featuredCourses,
        ]);
    }
}
