<?php

namespace Logixs\Modules\Course\Controllers;

use Illuminate\Http\Request;
use Logixs\Services\SaveImage;
use App\Http\Controllers\Controller;
use Logixs\Modules\Course\Query\GetCourse;

class CourseStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $this->validate($request, [
            'title' => ['required', 'string', 'max:100'],
            'categoryId' => ['required', 'int', 'exists:categories,id'],
            'subjectArea' => ['required', 'int', 'exists:subject_areas,id'],
            'language' => ['required', 'int'],
            'difficultyLevel' => ['required', 'int'],
            'dateStatus' => ['required', 'int'],
            'durationInterval' => ['required', 'int'],
            'modality' => ['required', 'int'],
            'pace' => ['required', 'int'],
            'classSize' => ['required', 'int'],
            'timeCommitment' => ['required', 'string'],
            'courseCode' => ['required', 'string'],
            'courseStartDate' => ['required', 'date'],
            'overview' => ['required'],
            'feeType' => ['required', 'string'],
            'duration' => ['required', 'string'],
            'platform' => ['required', 'string'],
            'venue' => ['required', 'string'],
            'description' => ['required', 'string'],
            'feeAmount' => ['nullable'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        /** @var \Illuminate\Http\UploadedFile * */
        $file = $request->file('image');
        $path = SaveImage::save($file);

        $course = GetCourse::store($data, $path);

        flash('Course added');

        return redirect()->route('course-edit', $course->id());
    }
}
