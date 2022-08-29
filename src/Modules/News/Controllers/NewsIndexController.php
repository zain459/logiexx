<?php

namespace Logixs\Modules\News\Controllers;

use Illuminate\Http\Request;
use Logixs\Modules\News\Models\News;

class NewsIndexController
{
    public function __invoke(Request $request)
    {
        $new = News::query();

        if (null !== $request->get('title')) {
            $new->where('title', 'like', '%' . $request->get('title') . '%');
        }
        $news = $new->paginate(10);

        return view('news.index', [
            'news' => $news,
        ]);
    }
}
