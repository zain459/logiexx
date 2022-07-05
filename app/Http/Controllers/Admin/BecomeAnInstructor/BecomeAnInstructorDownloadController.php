<?php

namespace App\Http\Controllers\Admin\BecomeAnInstructor;

use Logixs\Modules\Site\BecomeAnInstructor\Models\BecomeAnInstructor;

class BecomeAnInstructorDownloadController
{
    public function __invoke(int $id)
    {
        $becomeAnInstructor = BecomeAnInstructor::findOrFail($id);
        $file = public_path($becomeAnInstructor->file());

        return response()->download($file);
    }
}
