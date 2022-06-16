<?php

namespace Logixs\Modules\Webinar\Controllers;

use Logixs\Modules\Webinar\Models\Webinar;

class WebinarEditController
{
    public function __invoke(int $id)
    {
        $webinar = Webinar::query()->findOrFail($id);

        return view('webinar.edit', [
            'webinar' => $webinar
        ]);
    }
}
