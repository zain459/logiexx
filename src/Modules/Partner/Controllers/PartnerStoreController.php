<?php

namespace Logixs\Modules\Partner\Controllers;

use Illuminate\Http\Request;
use Logixs\Services\SaveImage;
use App\Http\Controllers\Controller;
use Logixs\Modules\Partner\Models\Partner;

class PartnerStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $this->validate($request, [
            'link' => ['required', 'string'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        /** @var \Illuminate\Http\UploadedFile * */
        $file = $request->file('image');
        $path = SaveImage::save($file);

        $partner = new Partner();
        $partner->link = $data['link'];
        $partner->image = $path;
        $partner->save();

        flash('affiliated partners created')->success();

        return redirect()->back();
    }
}
