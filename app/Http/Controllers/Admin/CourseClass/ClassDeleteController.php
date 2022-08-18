<?php

namespace App\Http\Controllers\Admin\CourseClass;

use Logixs\Modules\Course\Models\Course;
use Logixs\Modules\Course\Models\CourseClass;

class ClassDeleteController
{
    public function __invoke(int $id)
    {
        $class = CourseClass::findOrFail($id);

        $class->delete();
        flash('Class Deleted')->error()->important();

        return redirect()->back();
    }
}
