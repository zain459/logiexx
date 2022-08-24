<?php

namespace Logixs\Modules\Instructor\Controllers;

use Illuminate\Http\Request;
use Logixs\Services\SaveImage;
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
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'bio' => ['required'],
            'address' => ['nullable', 'string', 'max:171'],
        ]);

        $instructor->setName($data['name']);
        $instructor->setEmail($data['email']);
        $instructor->bio = $data['bio'];
        if (isset($data['address'])) {
            $instructor->setAddress($data['address']);
        }
        if (isset($data['image'])) {
            /** @var \Illuminate\Http\UploadedFile * */
            $file = $request->file('image');
            $path = SaveImage::save($file);
            $instructor->image = $path;
        }
        $instructor->save();

        flash('instructor updated')->success();

        return redirect()->back();
    }
}
