<?php

namespace App\Http\Controllers\Admin\BecomeAnInstructor;

use Logixs\Modules\Site\BecomeAnInstructor\Models\BecomeAnInstructor;

class BecomeAnInstructorDeleteController
{
    public function __invoke(int $id)
    {
        $becomeAnInstructor = BecomeAnInstructor::findOrFail($id);
        $becomeAnInstructor->delete();

        flash('Delete')->success();
        return redirect()->route('admin.become-an-instructor.index');
    }
}
