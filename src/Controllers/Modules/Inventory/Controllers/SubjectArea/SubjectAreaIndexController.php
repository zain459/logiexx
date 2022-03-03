<?php

namespace Logixs\Controllers\Modules\Inventory\Controllers\SubjectArea;

use Logixs\Controllers\Modules\Inventory\Model\SubjectArea;

class SubjectAreaIndexController
{
    public function __invoke()
    {
        $subjectArea = SubjectArea::all();

        return view('inventory.subject-area.index', [
            'subjectArea' => $subjectArea,
        ]);
    }
}
