<?php

namespace Logixs\Modules\Course\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Logixs\Modules\Site\Enrollment\Models\Enrollment;

class EnrollmentStatusStore extends Controller
{
    public function __invoke(Request $request, int $id)
    {
        // TODO: Implement __invoke() method.
        $enrollment = Enrollment::findOrFail($id);
        if ($request->has('status') == 1) {
            $enrollment->status = $request->has('status');
            $enrollment->save();

            flash('Status Active Please Add Certificate')->success()->important();
            return redirect()->route('course.enrollment-view', $enrollment->id());
        }
        if ($request->has('status') == 0) {
            $enrollment->status = $request->has('status');
            $enrollment->save();

            flash('Status InActive')->error()->error()->important();
            return redirect()->route('course.enrollment-view', $enrollment->id());
        }
    }
}
