<?php

namespace Logixs\Modules\Testimonial\Controllers;

use Logixs\Modules\Testimonial\Models\Testimonial;

class TestimonialIndexController
{
    public function __invoke()
    {
        $testimonials = Testimonial::all();

        return view('testimonial.index', [
            'testimonials' => $testimonials,
        ]);
    }
}
