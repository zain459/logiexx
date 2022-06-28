<?php

namespace App\Http\Controllers\Admin\FeaturedCourse;

use App\Http\Controllers\Controller;
use App\Models\Course\FeaturedCourse;
use Illuminate\Http\Request;

class FeaturedCourseIndexController extends Controller
{
    public function __invoke(Request $request)
    {
        $featuredCourses = FeaturedCourse::with('course')->orderBy('id', 'DESC')->get();

        return view('admin.feature-course.index', [
            'featuredCourses' => $featuredCourses
        ]);
    }
}
