<?php

namespace Logixs\Modules\Course\Controllers;

use Illuminate\Http\Request;
use Logixs\Modules\Course\Models\Course;
use Logixs\Modules\Course\Models\Feedback;

class FeedbackIndexController
{
    public function __invoke(int $id, Request $request)
    {
        /** @var Course $course */
        $course = Course::query()->findOrFail($id);
        $query = Feedback::query()->where('course_id', $course->id())->orderBy('id', 'Desc');
        if (null !== $request->get('key')) {
            $query->where(function ($q) use ($request) {
                $q
                    ->orWhere('title', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('feedback', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('rating', 'like', '%' . $request->get('key') . '%');
            });
        }
        $feedbacks = $query->paginate(10);

        return view('course.feedback-index', [
            'course' => $course,
            'feedbacks' => $feedbacks,
        ]);
    }
}
