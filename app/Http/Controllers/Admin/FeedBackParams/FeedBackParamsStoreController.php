<?php

namespace App\Http\Controllers\Admin\FeedBackParams;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FeedBackParams\FeedBackParams;

class FeedBackParamsStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $this->validate($request, [
            'category' => ['required', 'string'],
            'title' => ['required', 'string']
        ]);

        $feedBack = new FeedBackParams();
        $feedBack->category = $data['category'];
        $feedBack->title = $data['title'];

        $feedBack->save();
        flash('FeedBack Submitted Successfully')->success()->important();

        return redirect(route('admin.feed-back.index'));
    }
}
