<?php

namespace App\Http\Controllers\Admin\RegistrationForm;

use App\Http\Controllers\Controller;
use App\Models\Registration\Registration;

class RegistrationViewController extends Controller
{
    public function __invoke(int $id)
    {
        $registration = Registration::query()->findOrFail($id);

        return view('course.registration.view', [
            'registration' => $registration
        ]);
    }
}
