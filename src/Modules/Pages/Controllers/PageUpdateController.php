<?php

namespace Logixs\Modules\Pages\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Logixs\Modules\Pages\Models\Pages;

class PageUpdateController extends Controller
{
    public function __invoke(Request $request, int $id)
    {
        $data = $this->validate($request, [
            'title' => ['required', 'string', 'max:100'],
            'slug' => ['required', 'string'],
            'description' => ['required', 'string'],

        ]);
        /** @var Pages $page */
        $news = Pages::query()->findOrFail($id);
        $news->title = $data['title'];
        $news->slug = $data['slug'];
        $news->description = $data['description'];
        $news->save();

        return redirect()->back();
    }
}
