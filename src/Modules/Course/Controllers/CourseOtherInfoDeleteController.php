<?php

namespace Logixs\Modules\Course\Controllers;

use Logixs\Modules\Course\Models\CourseOtherInfo;

class CourseOtherInfoDeleteController
{
    public function __invoke(int $id)
    {
        CourseOtherInfo::query()->findOrFail($id)->delete();

        flash('course other detail delete')->warning();
        return redirect()->back();

    }

}
