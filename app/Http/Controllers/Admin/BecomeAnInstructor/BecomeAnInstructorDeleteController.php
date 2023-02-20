<?php

namespace App\Http\Controllers\Admin\BecomeAnInstructor;

use App\Models\BecomeAnInstructor;

class BecomeAnInstructorDeleteController
{
    public function __invoke(int $id)
    {
        $becomeAnInstructor = BecomeAnInstructor::findOrFail($id);

        $becomeAnInstructor->delete();
        flash('Delete')->success()->important();

        return redirect()->route('admin.become-an-instructor.index');
    }
}
