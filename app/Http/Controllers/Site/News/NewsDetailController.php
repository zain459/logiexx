<?php

namespace App\Http\Controllers\Site\News;

use App\Http\Controllers\Controller;
use Logixs\Modules\News\Models\News;

class NewsDetailController extends Controller
{
    public function __invoke(int $id)
    {
        $news = News::query()->findOrFail($id);
        if ($news === null) {
            abort(404, 'news not found');
        }

        return view('site.news.detail', [
            'news' => $news
        ]);
    }
}
