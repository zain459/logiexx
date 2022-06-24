<?php

namespace App\Http\Controllers\Admin\FeaturedCourse;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeaturedCourseIndexController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('admin.feature-course.index');
    }
}
