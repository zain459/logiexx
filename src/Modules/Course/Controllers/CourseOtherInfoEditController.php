<?php

namespace Logixs\Modules\Course\Controllers;

use Logixs\Modules\Course\Models\CourseOtherInfo;

class CourseOtherInfoEditController
{
    public function __invoke(int $id)
    {
       $courseInfo =  CourseOtherInfo::with('course')->findOrFail($id);

       return view('course.other-info-edit',[
           'courseInfo' => $courseInfo,
       ]);

    }

}
