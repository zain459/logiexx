<?php

namespace Logixs\Modules\Webinar\Controllers;

use App\Http\Controllers\Controller;
use Logixs\Modules\Webinar\Models\Webinar;

class WebinarDeleteController{
    public function __invoke(int $id){
        $webinar = Webinar::findOrFail($id);
        $webinar->delete();

        return redirect()->back();
    }
}
