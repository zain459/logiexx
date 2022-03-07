<?php

namespace Logixs\Modules\Partner\Controllers;

use Illuminate\Http\Request;
use Logixs\Services\SaveImage;
use App\Http\Controllers\Controller;
use Logixs\Modules\Partner\Models\Partner;

class PartnerUpdateController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $this->validate($request, [
            'link' => ['required', 'string'],
            'partnerId' => ['required', 'int', 'exists:partners,id'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        /** @var Partner $partner */
        $partner = Partner::query()->findOrFail($data['partnerId']);
        $partner->link = $data['link'];

        if (isset($data['image'])) {
            /** @var \Illuminate\Http\UploadedFile * */
            $file = $request->file('image');
            $path = SaveImage::save($file);
            $partner->image = $path;
        }

        $partner->save();
        flash('affiliated partners updated')->success();

        return redirect()->back();
    }
}
