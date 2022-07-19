<?php

namespace App\Http\Controllers\Admin\FeedBack;

use App\Http\Controllers\Controller;
use App\Models\FeedBack\FeedBack;
use Illuminate\Http\Request;

class FeedBackUpdateController extends Controller
{
    public function __invoke(int $id, Request $request)
    {
        /**@var FeedBack $feedBackParam */
        $feedBackParam = FeedBack::query()->findOrFail($id);
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
