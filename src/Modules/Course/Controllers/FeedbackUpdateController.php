<?php

namespace Logixs\Modules\Course\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Logixs\Modules\Course\Models\Feedback;

class FeedbackUpdateController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $this->validate($request, [
            'title' => ['required', 'string'],
            'feedback' => ['required', 'string'],
            'rating' => ['required', 'string'],
            'feedbackId' => ['required', 'int', 'exists:feedback,id'],
        ]);

        /** @var Feedback $feedback */
        $feedback = Feedback::query()->findOrFail($data['feedbackId']);
        $feedback->title = $data['title'];
        $feedback->feedback = $data['feedback'];
        $feedback->rating = $data['rating'];
        $feedback->save();

        flash('feedback Updated')->success();

        return redirect()->back();
    }
}
