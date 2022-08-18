<?php

namespace App\Http\Controllers\Admin\CourseFeedBackParams;


use App\Models\CourseFeedBackParams\CourseFeedBackParams;

class CourseFeedBackParamsDeleteController
{
    public function __invoke(int $id)
    {
        CourseFeedBackParams::query()->findOrFail($id)->delete();
        flash('Successfully Deleted')->error()->important();

        return redirect()->back();
    }
}
