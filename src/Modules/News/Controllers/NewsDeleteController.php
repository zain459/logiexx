<?php

namespace Logixs\Modules\News\Controllers;

use Logixs\Modules\News\Models\News;

class NewsDeleteController
{
    public function __invoke(int $id)
    {
        News::query()->findOrFail($id)->delete();

        flash('News deleted')->success()->important();

        return redirect()->route('news-index');
    }
}
