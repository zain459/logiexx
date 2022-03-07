<?php

namespace Logixs\Modules\Course\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CoursePartnerStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $this->validate($request, [
            'assignedCourse' => ['required', 'int', 'exists:courses,id'],
            'courseId' => ['required', 'int', 'exists:courses,id'],
        ]);

        dd($data);
    }
}
