<?php

namespace App\Http\Controllers\Admin\BecomeAnInstructor;

use App\Models\BecomeAnInstructor;

class BecomeAnInstructorViewController
{
    public function __invoke(int $id)
    {
        $becomeAnInstructor = BecomeAnInstructor::findOrFail($id);

        return view('admin.become-an-instructor.view', [
            'becomeAnInstructor' => $becomeAnInstructor
        ]);
    }
}
