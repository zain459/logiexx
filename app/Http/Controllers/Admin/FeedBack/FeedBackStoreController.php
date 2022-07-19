<?php

namespace App\Http\Controllers\Admin\FeedBack;

use Illuminate\Http\Request;
use App\Models\FeedBack\FeedBack;
use App\Http\Controllers\Controller;

class FeedBackStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $this->validate($request, [
            'category' => ['required', 'string'],
            'title' => ['required', 'string']
        ]);

        $feedBack = new FeedBack();
        $feedBack->category = $data['category'];
        $feedBack->title = $data['title'];
        $feedBack->save();

        flash('FeedBack Submitted Successfully')->success();
        return redirect(route('admin.feed-back.index'));
    }
}
