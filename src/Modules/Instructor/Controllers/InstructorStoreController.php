<?php

namespace Logixs\Modules\Instructor\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Logixs\Modules\Instructor\Models\Instructor;

class InstructorStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $this->validate($request, [
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:instructors,email'],
            'address' => ['nullable', 'string'],
        ]);

        $instructor = new Instructor();
        $instructor->setName($data['name']);
        $instructor->setEmail($data['email']);
        if (isset($data['address'])) {
            $instructor->setAddress($data['address']);
        }
        $instructor->save();

        flash('instructor added')->success();

        return redirect()->back();
    }
}
