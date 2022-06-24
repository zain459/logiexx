<?php

namespace App\Http\Controllers\Admin\SubjectArea;

use App\Models\SubjectArea\SubjectArea;

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
