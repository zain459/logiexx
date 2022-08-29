<?php

namespace Logixs\Modules\Testimonial\Controllers;

use Illuminate\Http\Request;
use Logixs\Modules\Testimonial\Models\Testimonial;

class TestimonialIndexController
{
    public function __invoke(Request $request)
    {
        $testimonial = Testimonial::query();

        if (null !== $request->get('name')) {
            $testimonial->where('name', 'like', '%' . $request->get('name') . '%');
        }

        $testimonials = $testimonial->paginate(10);

        return view('testimonial.index', [
            'testimonials' => $testimonials,
        ]);
    }
}
