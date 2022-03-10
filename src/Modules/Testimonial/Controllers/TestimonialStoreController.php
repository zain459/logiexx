<?php

namespace Logixs\Modules\Testimonial\Controllers;

use Illuminate\Http\Request;
use Logixs\Services\SaveImage;
use App\Http\Controllers\Controller;
use Logixs\Modules\Testimonial\Models\Testimonial;

class TestimonialStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $this->validate($request, [
            'name' => ['required', 'string', 'max:100'],
            'company' => ['required', 'string', 'max:100'],
            'designation' => ['required', 'string', 'max:100'],
            'description' => ['required', 'string', 'max:100'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        /** @var \Illuminate\Http\UploadedFile * */
        $file = $request->file('image');
        $path = SaveImage::save($file);

        $testimonial = new Testimonial();
        $testimonial->name = $data['name'];
        $testimonial->company = $data['company'];
        $testimonial->designation = $data['designation'];
        $testimonial->description = $data['description'];
        $testimonial->image = $path;
        $testimonial->save();

        flash('testimonial added')->success();

        return redirect()->route('testimonial-edit', $testimonial->id());
    }
}
