<?php

namespace Logixs\Modules\Pages\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Logixs\Modules\Pages\Models\Pages;


class PageStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $this->validate($request, [
            'title' => ['required', 'string', 'max:100'],
            'slug' => ['required', 'string'],
            'description' => ['required'],
        ]);

        $page = new Pages();
        $page->title = $data['title'];
        $page->slug = Str::slug($data['title']);
        $page->description = $data['description'];
        $page->save();

        return redirect()->back();
    }
}
