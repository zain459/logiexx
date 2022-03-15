<?php

namespace Logixs\Modules\News\Controllers;

use Logixs\Modules\News\Models\News;

class NewsEditController
{
    public function __invoke(int $id)
    {
        $news = News::query()->findOrFail($id);

        return view('news.edit', [
            'news' => $news,
        ]);
    }
}
