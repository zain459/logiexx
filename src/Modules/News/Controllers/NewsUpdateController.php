<?php

namespace Logixs\Modules\News\Controllers;

use Illuminate\Http\Request;
use Logixs\Services\SaveImage;
use App\Http\Controllers\Controller;
use Logixs\Modules\News\Models\News;

class NewsUpdateController extends Controller
{
    public function __invoke(Request $request, int $id)
    {
        $data = $this->validate($request, [
            'title' => ['required', 'string', 'max:100'],
            'shortDescription' => ['required', 'string', 'max:191'],
            'longDescription' => ['required', 'string'],
            'postedDate' => ['required', 'date'],
            'link' => ['nullable', 'url'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);
        /** @var News $news */
        $news = News::query()->findOrFail($id);
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

        return 'news updated';
    }
}
