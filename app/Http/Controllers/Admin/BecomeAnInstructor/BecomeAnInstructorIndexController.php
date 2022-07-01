<?php

namespace App\Http\Controllers\Admin\BecomeAnInstructor;

use Logixs\Modules\Site\BecomeAnInstructor\Models\BecomeAnInstructor;

class BecomeAnInstructorIndexController
{
    public function __invoke()
    {
       $becomeAnInstructors =  BecomeAnInstructor::all();

        return view('admin.become-an-instructor.index', [
            'becomeAnInstructors' => $becomeAnInstructors
        ]);
    }
}
