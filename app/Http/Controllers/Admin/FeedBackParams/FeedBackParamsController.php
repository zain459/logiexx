<?php

namespace App\Http\Controllers\Admin\FeedBackParams;

use Illuminate\Http\Request;
use App\Models\FeedBackParams\FeedBackParams;

class FeedBackParamsController
{
    public function __invoke(Request $request)
    {
        $feedBackParam = FeedBackParams::query();

        if (null !== $request->get('title')) {
            $feedBackParam->where('title', 'like', '%' . $request->get('title') . '%');
        }

        $feedBackParams = $feedBackParam->paginate(10);

        return view('admin.feedback-params.index', [
            'feedBackParams' => $feedBackParams
        ]);
    }
}
