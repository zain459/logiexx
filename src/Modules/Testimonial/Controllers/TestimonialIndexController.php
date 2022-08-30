<?php

namespace Logixs\Modules\Testimonial\Controllers;

use Illuminate\Http\Request;
use Logixs\Modules\Testimonial\Models\Testimonial;

class TestimonialIndexController
{
    public function __invoke(Request $request)
    {
        $query = Testimonial::query();

        if (null !== $request->get('key')) {
            $query->where(function ($q) use ($request){
               $q
                   ->orWhere('name', 'like', '%'. $request->get('key').'%')
                   ->orWhere('company', 'like', '%'. $request->get('key'). '%')
                   ->orWhere('designation', 'like', '%'. $request->get('key'). '%')
                   ->orWhere('description', 'like', '%'. $request->get('key'). '%');
            });
        }

        $testimonials = $query->paginate(10);

        return view('testimonial.index', [
            'testimonials' => $testimonials,
        ]);
    }
}
