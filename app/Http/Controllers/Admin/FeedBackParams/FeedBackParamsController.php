<?php

namespace App\Http\Controllers\Admin\FeedBackParams;

use App\Models\FeedBackParams\FeedBackParams;

class FeedBackParamsController
{
    public function __invoke()
    {
        $feedBackParams = FeedBackParams::all();

        return view('admin.feedback-params.index',[
            'feedBackParams' => $feedBackParams
        ]);
    }
}
