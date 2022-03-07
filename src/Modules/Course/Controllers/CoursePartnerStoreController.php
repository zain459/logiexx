<?php

namespace Logixs\Modules\Course\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Logixs\Modules\Course\Models\CoursePartner;

class CoursePartnerStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $this->validate($request, [
            'partner' => ['required', 'int', 'exists:partners,id'],
            'courseId' => ['required', 'int', 'exists:courses,id'],
        ]);
        $partner = CoursePartner::query()
            ->where('partner_id', $data['partner'])
            ->where('course_id', $data['courseId'])
            ->exists();
        if (!$partner) {
            $assign = new CoursePartner();
            $assign->course_id = $data['courseId'];
            $assign->partner_id = $data['partner'];
            $assign->save();
        }

        flash('affiliated partner assigned')->success();

        return redirect()->back();
    }
}
