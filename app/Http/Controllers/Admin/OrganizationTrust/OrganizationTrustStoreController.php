<?php

namespace App\Http\Controllers\Admin\OrganizationTrust;

use App\Http\Controllers\Controller;
use App\Models\OrganizationTrust\OrganizationTrust;
use Illuminate\Http\Request;
use Logixs\Services\SaveImage;

class OrganizationTrustStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $this->validate($request, [
            'link' => ['required', 'string', 'url', 'max:255'],
            'image' => ['required', 'image', 'mimes:svg'],
        ]);

        /** @var \Illuminate\Http\UploadedFile * */
        $file = $request->file('image');
        $path = SaveImage::save($file);

        $organizationTrust = new OrganizationTrust();
        $organizationTrust->link = $data['link'];
        $organizationTrust->image = $path;
        $organizationTrust->save();

        flash('Organization Trust Added')->success()->important();

        return redirect(route('organization-trust.index'));

    }
}
