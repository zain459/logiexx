<?php

namespace Logixs\Modules\Testimonial\Controllers;

use Logixs\Modules\Testimonial\Models\Testimonial;
use function Illuminate\Events\queueable;

class TestimonialDeleteController
{
    public function __invoke(int $id)
    {
        Testimonial::query()->findOrFail($id)->delete();
        flash('Deleted Successfully')->error();

        return redirect(route('testimonial-index'));
    }
}
