<?php

namespace App\Http\Controllers\Admin\CourseFeedBackParams;

use Illuminate\Http\Request;
use Logixs\Modules\Course\Models\Course;
use App\Models\FeedBackParams\FeedBackParams;
use App\Models\CourseFeedBackParams\CourseFeedBackParams;

class CourseFeedBackParamsIndexController
{
    public function __invoke(int $id, Request $request)
    {
        $feedbacks = FeedBackParams::all();
        $course = Course::query()->findOrFail($id);
        $query = CourseFeedBackParams::query()
            ->with('feedbackParam')
            ->where('course_id', $course->id());

        if (null !== $request->get('key')) {
            $query->whereHas('feedbackParam', function ($q) use ($request) {
                $q->where(function ($a) use($request){
                    $a->orWhere('title', $request->get('key'))
                    ->orWhere('type', $request->get('key'));
                });
            });
        }

        $courseFeedbackParams = $query->paginate(10);

        return view('admin.course-feedback-params.index', [
            'course' => $course,
            'feedbacks' => $feedbacks,
            'courseFeedbackParams' => $courseFeedbackParams,
        ]);
    }
}
