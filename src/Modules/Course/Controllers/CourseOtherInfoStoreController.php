<?php

namespace Logixs\Modules\Course\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Logixs\Modules\Course\Models\CourseOtherInfo;

class CourseOtherInfoStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $this->validate($request, [
            'title' => ['required', 'string', 'max:100'],
            'description' => ['required', 'string'],
            'courseId' => ['required', 'int', 'exists:courses,id'],
        ]);

        $info = new CourseOtherInfo();
        $info->title = $data['title'];
        $info->description = $data['description'];
        $info->course_id = $data['courseId'];
        $info->save();

        flash('course detail added')->success();

        return redirect()->route('course.other-info', $info->courseId());
    }
}
