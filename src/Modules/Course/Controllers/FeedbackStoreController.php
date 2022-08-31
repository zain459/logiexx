<?php

namespace Logixs\Modules\Course\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Logixs\Modules\Course\Models\Feedback;

class FeedbackStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $this->validate($request, [
            'title' => ['required', 'string'],
            'feedback' => ['required', 'string'],
            'rating' => ['required', 'string'],
            'courseId' => ['required', 'int', 'exists:courses,id'],
        ]);

        $feedback = new Feedback();
        $feedback->title = $data['title'];
        $feedback->feedback = $data['feedback'];
        $feedback->rating = $data['rating'];
        $feedback->course_id = $data['courseId'];
        $feedback->save();

        flash('feedback submitted')->success()->important();

        return redirect()->back();
    }
}
