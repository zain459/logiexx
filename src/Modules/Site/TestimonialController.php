<?php

namespace Logixs\Modules\Site;

use App\Models\SubjectArea\SubjectArea;
use Logixs\Modules\Testimonial\Models\Testimonial;

class TestimonialController
{
    public function __invoke()
    {
        $testimonials = Testimonial::orderBy('id', 'desc')->get();
        $subjectAreas = SubjectArea::all();

        return view('site.testimonial', [
            'testimonials' => $testimonials,
            'subjectAreas' => $subjectAreas
        ]);
    }
}
