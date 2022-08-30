<?php

namespace Logixs\Modules\News\Controllers;

use Illuminate\Http\Request;
use Logixs\Modules\News\Models\News;

class NewsIndexController
{
    public function __invoke(Request $request)
    {
        $query = News::query();

        if (null !== $request->get('key')) {
            $query->where(function ($q) use ($request) {
                $q
                    ->orWhere('title', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('short_description', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('long_description', 'like', '%' . $request->get('key') . '%');
            });
        }
        if (null !== $request->get('date')) {
            $query->where('posted_date',  $request->get('date'));
        }
        $news = $query->paginate(10);

        return view('news.index', [
            'news' => $news,
        ]);
    }
}
