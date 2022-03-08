<?php

namespace Logixs\Modules\Course\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

        dd($data);
    }
}
