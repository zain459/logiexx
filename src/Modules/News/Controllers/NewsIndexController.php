<?php

namespace Logixs\Modules\News\Controllers;

use Logixs\Modules\News\Models\News;

class NewsIndexController
{
    public function __invoke()
    {
        $news = News::all();

        return view('news.index', [
            'news' => $news,
        ]);
    }
}
