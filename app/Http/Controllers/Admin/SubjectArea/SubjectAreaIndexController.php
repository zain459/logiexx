<?php

namespace App\Http\Controllers\Admin\SubjectArea;

use Logixs\Modules\Inventory\Model\SubjectArea;

class SubjectAreaIndexController
{
    public function __invoke()
    {
        $subjectArea = SubjectArea::all();

        return view('admin.subject-area.index', [
            'subjectArea' => $subjectArea,
        ]);
    }
}
