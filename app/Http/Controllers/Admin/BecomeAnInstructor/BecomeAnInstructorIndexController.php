<?php

namespace App\Http\Controllers\Admin\BecomeAnInstructor;

use Illuminate\Http\Request;
use Logixs\Modules\Site\BecomeAnInstructor\Models\BecomeAnInstructor;

class BecomeAnInstructorIndexController
{
    public function __invoke(Request $request)
    {
        $query = BecomeAnInstructor::query();

        if (null !== $request->get('key')) {
            $query->where(function ($q) use ($request) {
                $q
                    ->orWhere('title', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('first_name', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('middle_name', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('last_name', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('degree', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('telephone', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('email', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('city', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('post_code', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('province', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('country', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('teaching_interest', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('subject_areas', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('tentative_course_title', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('available_to_start_work', 'like', '%' . $request->get('key') . '%');
            });
        }
        $becomeAnInstructors = $query->paginate(10);

        return view('admin.become-an-instructor.index', [
            'becomeAnInstructors' => $becomeAnInstructors
        ]);
    }
}
