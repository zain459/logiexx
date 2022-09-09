<?php

namespace App\Http\Controllers\Admin\SubjectArea;

use App\Models\SubjectArea\SubjectArea;
use Illuminate\Http\Request;
use function Amp\Promise\all;

class SubjectAreaIndexController
{
    public function __invoke(Request $request)
    {
        $subjectArea = SubjectArea::query();
        if (null !== $request->get('name')) {
            $subjectArea->where('name', 'like', '%' . $request->get('name') . '%');
        }
        $subjectAreas = $subjectArea->paginate('10');

        return view('admin.subject-area.index', [
            'subjectAreas' => $subjectAreas,
        ]);
    }
}
