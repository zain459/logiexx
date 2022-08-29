<?php

namespace Logixs\Modules\Instructor\Controllers;

use Illuminate\Http\Request;
use Logixs\Modules\Instructor\Models\Instructor;

class InstructorIndexController
{
    public function __invoke(Request $request)
    {
        $query = Instructor::query();

        if (null !== $request->get('key')) {
            $query->where(function ($q) use ($request) {
                $q
                    ->orWhere('name', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('bio', 'like', '%' . $request->get('key') . '%');
            });
        }

        if (null !== $request->get('email')) {
            $query->where('email', 'like', '%' . $request->get('email') . '%');
        }

        if (null !== $request->get('address')) {
            $query->where('address', 'like', '%' . $request->get('address') . '%');
        }

        $instructors = $query->paginate('10');

        return view('instructor.index', [
            'instructors' => $instructors,
        ]);
    }
}
