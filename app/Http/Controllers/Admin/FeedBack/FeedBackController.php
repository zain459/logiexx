<?php

namespace App\Http\Controllers\Admin\FeedBack;

use App\Models\FeedBack\FeedBack;

class FeedBackController
{
    public function __invoke()
    {
        $feedBackParams = FeedBack::all();

        return view('admin.feedback.index',[
            'feedBackParams' => $feedBackParams
        ]);
    }
}
