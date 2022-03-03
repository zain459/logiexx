<?php

namespace Logixs\Modules\Inventory\Controllers\SubjectArea;

use Logixs\Modules\Inventory\Model\SubjectArea;

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
