<?php

namespace App\Http\Controllers\Admin\FeedBackParams;

use App\Models\FeedBackParams\FeedBackParams;

class FeedBackParamsDeleteController
{
    public function __invoke(int $id)
    {
        FeedBackParams::query()->findOrFail($id)->delete();
        flash('Successfully Deleted')->error()->important();

        return redirect(route('admin.feed-back.index'));
    }
}
