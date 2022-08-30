<?php

namespace App\Http\Controllers\Admin\CourseClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Logixs\Modules\Course\Models\Course;
use Logixs\Services\SaveImage;
use Logixs\Modules\Course\Models\CourseClass;

class ClassUpdateController extends Controller
{
    public function __invoke(Request $request, int $id)
    {
        $data = $this->validate($request, [
            'title' => ['required', 'string'],
            'date' => ['required', 'date'],
            'modality' => ['required', 'int'],
            'venue' => ['required', 'string'],
            'class_seat' => ['required', 'int'],
            'class_duration' => ['required', 'string'],
            'file' => ['required'],
        ]);

        $courseClass = CourseClass::query()->findOrFail($id);
        $courseClass->title = $data['title'];
        $courseClass->date = $data['date'];
        $courseClass->modality = $data['modality'];
        $courseClass->class_seat = $data['class_seat'];
        $courseClass->class_duration = $data['class_duration'];

        if (isset($data['image'])) {
            /** @var \Illuminate\Http\UploadedFile * */
            $file = $request->file('file');
            $path = SaveImage::save($file);
            $courseClass->file = $path;
        }
        $courseClass->save();

        flash('class Updated')->success()->important();
        return redirect()->route('admin.course-class.index', $courseClass->courseId());
    }
}
