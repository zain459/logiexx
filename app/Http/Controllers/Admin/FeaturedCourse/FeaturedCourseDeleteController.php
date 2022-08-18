<?php

namespace App\Http\Controllers\Admin\FeaturedCourse;

use App\Models\Course\FeaturedCourse;

class FeaturedCourseDeleteController
{
    public function __invoke(int $id)
    {
        FeaturedCourse::findOrFail($id)->delete();

        flash('Course Featured deleted')->error()->important();

        return redirect()->back();
    }
}
