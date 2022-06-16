<?php

namespace Logixs\Modules\Course\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Logixs\Modules\Course\Query\GetCourse;

class CourseUpdateController extends Controller
{
    public function __invoke(Request $request, int $id)
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
            'venue' => ['required', 'string'],
            'platform' => ['required', 'string'],
            'feeAmount' => ['nullable'],
            'image' => ['nullable', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        GetCourse::update($data, $id, $request);

        flash('Course Updated')->success();

        return redirect()->back();
    }
}
