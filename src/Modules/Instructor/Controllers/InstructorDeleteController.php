<?php

namespace Logixs\Modules\Instructor\Controllers;

use Logixs\Modules\Instructor\Models\Instructor;

class InstructorDeleteController
{
    public function __invoke(int $id)
    {
        Instructor::query()->findOrFail($id)->delete();
        flash('Deleted Successfully')->error();

        return redirect(route('instructor.index'));
    }
}
