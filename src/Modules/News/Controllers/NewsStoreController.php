<?php

namespace Logixs\Modules\News\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Logixs\Modules\News\Models\News;
use Logixs\Services\SaveImage;

class NewsStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $this->validate($request, [
            'title' => ['required', 'string', 'max:100'],
            'shortDescription' => ['required', 'string'],
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
        if (isset($data['image'])) {
            /** @var \Illuminate\Http\UploadedFile * */
            $file = $request->file('image');
            $path = SaveImage::save($file);
            $news->image = $path;
        }

        $news->save();
        flash('News Successfully Created')->success()->important();

        return redirect()->route('news-index');
    }
}
