<?php

namespace App\Http\Controllers\Admin\SubjectArea;

use App\Http\Controllers\Controller;
use App\Models\SubjectArea\SubjectArea;

class SubjectAreaDeleteController extends Controller
{
    public function __invoke(int $id)
    {
        $subjectArea = SubjectArea::query()->findOrFail($id);
        $subjectArea->delete();

        flash('Subject-Area Deleted')->error()->important();

        return redirect(route('admin.subject-area.index'));
    }
}
