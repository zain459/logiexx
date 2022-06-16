<?php

namespace Logixs\Modules\Site;

use Logixs\Modules\Testimonial\Models\Testimonial;

class TestimonialController
{
    public function __invoke()
    {
        $testimonials = Testimonial::all();

        return view('site.testimonial', [
            'testimonials' => $testimonials
        ]);
    }
}
