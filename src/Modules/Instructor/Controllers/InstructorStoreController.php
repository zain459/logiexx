<?php

namespace Logixs\Modules\Instructor\Controllers;

use Illuminate\Http\Request;
use Logixs\Services\SaveImage;
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
            'bio' => ['required'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        $instructor = new Instructor();
        $instructor->setName($data['name']);
        $instructor->setEmail($data['email']);
        $instructor->bio = $data['bio'];
        if (isset($data['image'])) {
            /** @var \Illuminate\Http\UploadedFile * */
            $file = $request->file('image');
            $path = SaveImage::save($file);
            $instructor->image = $path;
        }
        if (isset($data['address'])) {
            $instructor->setAddress($data['address']);
        }
        $instructor->save();

        flash('instructor added')->success()->important();

        return redirect()->back();
    }
}
