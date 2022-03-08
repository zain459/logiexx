<?php

namespace Logixs\Modules\Instructor\Controllers;

use Logixs\Modules\Instructor\Models\Instructor;

class InstructorIndexController
{
    public function __invoke()
    {
        $instructors = Instructor::all();

        return view('instructor.index', [
            'instructors' => $instructors,
        ]);
    }
}
