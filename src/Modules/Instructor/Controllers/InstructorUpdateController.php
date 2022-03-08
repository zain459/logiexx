<?php

namespace Logixs\Modules\Instructor\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Logixs\Modules\Instructor\Models\Instructor;

class InstructorUpdateController extends Controller
{
    public function __invoke(Request $request, int $id)
    {
        /** @var Instructor $instructor */
        $instructor = Instructor::query()->findOrFail($id);

        if (null === $instructor) {
            abort(404, 'instructor not found');
        }

        $data = $this->validate($request, [
            'name' => ['required', 'string', 'max:171'],
            'email' => ['required', 'email', Rule::unique('instructors')->ignore($instructor->id())],
            'address' => ['nullable', 'string', 'max:171'],
        ]);

        $instructor->setName($data['name']);
        $instructor->setEmail($data['email']);
        if (isset($data['address'])) {
            $instructor->setAddress($data['address']);
        }
        $instructor->save();

        flash('instructor updated')->success();

        return redirect()->back();
    }
}
