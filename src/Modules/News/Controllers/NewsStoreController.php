<?php

namespace Logixs\Modules\News\Controllers;

use Illuminate\Http\Request;
use Logixs\Services\SaveImage;
use App\Http\Controllers\Controller;
use Logixs\Modules\News\Models\News;

class NewsStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $this->validate($request, [
            'title' => ['required', 'string', 'max:100'],
            'shortDescription' => ['required', 'string', 'max:191'],
            'longDescription' => ['required', 'string'],
            'postedDate' => ['required', 'date'],
            'link' => ['nullable', 'url'],
            'image' => ['nullable'],
        ]);

        $news = new News();
        $news->title = $data['title'];
        $news->short_description = $data['shortDescription'];
        $news->long_description = $data['longDescription'];
        $news->posted_date = $data['postedDate'];
        if (isset($data['link'])) {
            $news->link = $data['link'];
        }
        $news->image = $data['image'];

        $news->save();

        return 'news Created';
    }
}
