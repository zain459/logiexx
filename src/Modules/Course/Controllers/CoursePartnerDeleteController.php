<?php

namespace Logixs\Modules\Course\Controllers;

use Logixs\Modules\Course\Models\CoursePartner;

class CoursePartnerDeleteController
{
    public function __invoke(int $id)
    {
        CoursePartner::query()->findOrFail($id)->delete();

        flash('course partner removed')->warning();

        return redirect()->back();
    }
}
