<?php

namespace Logixs\Modules\Partner\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PartnerStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $this->validate($request, [
            'link' => ['required', 'string'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        dd($data);
    }
}
