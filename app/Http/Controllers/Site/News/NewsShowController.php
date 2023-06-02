<?php

namespace App\Http\Controllers\Site\News;

use App\Http\Controllers\Controller;
use Logixs\Modules\News\Models\News;

class NewsShowController extends Controller
{
    public function __invoke()
    {
        $news = News::orderBy('posted_date', 'desc')->get();

        return view('site.news.show', [
            'news' => $news
        ]);
    }
}
