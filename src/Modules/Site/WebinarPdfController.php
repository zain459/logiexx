<?php

namespace Logixs\Modules\Site;

use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;
use Logixs\Modules\Webinar\Models\Webinar;

class WebinarPdfController extends Controller
{
    public function __invoke(int $id)
    {
        $webinars = Webinar::findOrFail($id);

        $pdf = PDF::loadView('site.webinar-pdf', [
            'webinars' => $webinars
        ]);

        return $pdf->download('flyer.pdf');
    }
}
