<?php

namespace Logixs\Modules\Course\Controllers;

use Logixs\Modules\Course\Models\Feedback;

class FeedbackDeleteController
{
    public function __invoke(int $id)
    {
        Feedback::query()->findOrFail($id)->delete();

        flash('feedback deleted')->success();

        return redirect()->back();
    }
}
