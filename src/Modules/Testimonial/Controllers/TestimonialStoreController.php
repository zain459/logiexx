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
            'description' => ['required', 'string'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        $testimonial = new Testimonial();
        $testimonial->name = $data['name'];
        $testimonial->company = $data['company'];
        $testimonial->designation = $data['designation'];
        $testimonial->description = $data['description'];
        /** @var \Illuminate\Http\UploadedFile * */
        if (isset($data['image'])) {
            $file = $request->file('image');
            $path = SaveImage::save($file);
            $testimonial->image = $path;
        }
        $testimonial->save();

        flash('testimonial added')->success()->important();

        return redirect()->route('testimonial-index', $testimonial->id());
    }
}
