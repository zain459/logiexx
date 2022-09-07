<?php

namespace Logixs\Modules\Testimonial\Controllers;

use Illuminate\Http\Request;
use Logixs\Services\SaveImage;
use App\Http\Controllers\Controller;
use Logixs\Modules\Testimonial\Models\Testimonial;

class TestimonialUpdateController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $this->validate($request, [
            'name' => ['required', 'string', 'max:100'],
            'company' => ['required', 'string', 'max:100'],
            'designation' => ['required', 'string', 'max:100'],
            'description' => ['required', 'string'],
            'other' => ['nullable', 'string', 'max:100'],
            'testimonialId' => ['required', 'int', 'exists:testimonials,id'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);
        /** @var Testimonial $testimonial */
        $testimonial = Testimonial::query()->findOrFail($data['testimonialId']);
        $testimonial->name = $data['name'];
        $testimonial->company = $data['company'];
        $testimonial->designation = $data['designation'];
        $testimonial->description = $data['description'];
        if (isset($data['other'])) {
            $testimonial->other = $data['other'];
        }
        if (isset($data['image'])) {
            /** @var \Illuminate\Http\UploadedFile * */
            $file = $request->file('image');
            $path = SaveImage::save($file);
            $testimonial->image = $path;
        }
        $testimonial->save();

        flash('Record updated')->success()->important();

        return redirect()->back();
    }
}
