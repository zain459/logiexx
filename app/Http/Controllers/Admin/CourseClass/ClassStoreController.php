<?php

namespace App\Http\Controllers\Admin\CourseClass;

use Illuminate\Http\Request;
use Logixs\Services\SaveImage;
use App\Http\Controllers\Controller;
use Logixs\Modules\Course\Models\Course;
use Logixs\Modules\Course\Models\CourseClass;

class ClassStoreController extends Controller
{
    public function __invoke(Request $request, int $id)
    {
        $course = Course::query()->findOrFail($id);
        $data = $this->validate($request, [
            'title' => ['required', 'string'],
            'date' => ['required', 'date'],
            'modality' => ['required', 'int'],
            'venue' => ['required', 'string'],
            'class_seat' => ['required', 'int'],
            'class_duration' => ['required', 'string'],
            'file' => ['required'],
            'courseId' => ['required', 'int', 'exists:courses,id'],
        ]);

        $class = new CourseClass();
        $class->title = $data['title'];
        $class->date = $data['date'];
        $class->modality = $data['modality'];
        $class->venue = $data['venue'];
        $class->class_seat = $data['class_seat'];
        $class->class_duration = $data['class_duration'];
        /** @var \Illuminate\Http\UploadedFile * */
        $file = $request->file('file');
        $path = SaveImage::save($file);
        $class->class_hand_outs = $path;
        $class->course_id = $data['courseId'];
        $class->save();

        flash('Class Created')->success()->important();
        return redirect(route('admin.course-class.index', $course->id()));
    }
}
