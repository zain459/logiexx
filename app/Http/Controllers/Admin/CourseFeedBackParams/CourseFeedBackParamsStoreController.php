<?php

namespace App\Http\Controllers\Admin\CourseFeedBackParams;

use App\Http\Controllers\Controller;
use App\Models\CourseFeedBackParams\CourseFeedBackParams;
use Illuminate\Http\Request;

class CourseFeedBackParamsStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $this->validate($request, [
            'course_id' => ['required'],
            'feedback_params_id' => ['required'],
            'type' => ['required', 'string']
        ]);

        $courseFeedbackParam = CourseFeedBackParams::query()
            ->where('feedback_params_id', $data['feedback_params_id'])
            ->where('course_id', $data['course_id'])
            ->where('type', $data['type'])
            ->exists();
        if (!$courseFeedbackParam) {
            $courseFeedbackParam = new CourseFeedBackParams();
            $courseFeedbackParam->course_id = $data['course_id'];
            $courseFeedbackParam->feedback_params_id = $data['feedback_params_id'];
            $courseFeedbackParam->type = $data['type'];
            $courseFeedbackParam->save();

            flash('Course Feedback Params Submit Successfully')->success()->important();

            return redirect(route('admin.course.feedback-params', $courseFeedbackParam->course_id));
        } else {
            flash('Course Feedback Params Already Assigned')->error()->important();

            return redirect()->back();
        }

    }
}
