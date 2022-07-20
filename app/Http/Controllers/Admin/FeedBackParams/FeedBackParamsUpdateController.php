<?php

namespace App\Http\Controllers\Admin\FeedBackParams;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FeedBackParams\FeedBackParams;

class FeedBackParamsUpdateController extends Controller
{
    public function __invoke(int $id, Request $request)
    {
        /**@var FeedBackParams $feedBackParam */
        $feedBackParam = FeedBackParams::query()->findOrFail($id);
        if (null === $feedBackParam) {
            abort(404, 'FeedBack Params Not Found');
        }
        $data = $this->validate($request, [
            'category' => ['required', 'string'],
            'title' => ['required', 'string']
        ]);
        $feedBackParam->category = $data['category'];
        $feedBackParam->title = $data['title'];
        $feedBackParam->save();

        flash('FeedBack updated Successfully')->success();
        return redirect(route('admin.feed-back.index'));
    }
}
