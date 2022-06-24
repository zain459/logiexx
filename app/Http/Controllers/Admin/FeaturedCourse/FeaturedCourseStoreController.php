<?php

namespace App\Http\Controllers\Admin\FeaturedCourse;

use App\Http\Controllers\Controller;
use App\Models\Course\FeaturedCourse;
use Illuminate\Http\Request;

class FeaturedCourseStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $feature = new FeaturedCourse();
        $feature->course_id = $request->course_id;
        $feature->type_id = $request->type_id;
        $feature->save();

        return redirect()->back();
    }
}
