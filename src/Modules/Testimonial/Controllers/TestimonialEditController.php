<?php

namespace Logixs\Modules\Testimonial\Controllers;

use Logixs\Modules\Testimonial\Models\Testimonial;

class TestimonialEditController
{
    public function __invoke(int $id)
    {
        $testimonial = Testimonial::query()->findOrFail($id);

        return view('testimonial.edit', [
            'testimonial' => $testimonial,
        ]);
    }
}
