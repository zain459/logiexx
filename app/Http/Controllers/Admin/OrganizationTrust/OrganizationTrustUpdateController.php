<?php

namespace App\Http\Controllers\Admin\OrganizationTrust;

use App\Http\Controllers\Controller;
use App\Models\OrganizationTrust\OrganizationTrust;
use Illuminate\Http\Request;
use Logixs\Services\SaveImage;

class OrganizationTrustUpdateController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $this->validate($request, [
            'link' => ['required', 'string', 'url', 'max:255'],
            'organizationTrustId' => ['required', 'int', 'exists:organization_trust,id'],
            'image' => ['nullable', 'image', 'mimes:svg'],
        ]);

        /** @var OrganizationTrust $organizationTrust */
        $organizationTrust = OrganizationTrust::query()->findOrFail($data['organizationTrustId']);
        $organizationTrust->link = $data['link'];

        if (isset($data['image'])) {
            /** @var \Illuminate\Http\UploadedFile * */
            $file = $request->file('image');
            $path = SaveImage::save($file);
            $organizationTrust->image = $path;
        }

        $organizationTrust->save();
        flash('Organization Trust Updated')->success()->important();

        return redirect(route('organization-trust.index'));
    }
}
