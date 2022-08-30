<?php

namespace App\Http\Controllers\Admin\CorporatePartnership;

use Illuminate\Http\Request;
use Logixs\Modules\Site\CorporatePartnership\Models\CorporatePartnership;

class CorporatePartnershipIndexController
{
    public function __invoke(Request $request)
    {
        $query = CorporatePartnership::query();
        if (null !== $request->get('key')) {
            $query->where(function ($q) use ($request) {
                $q
                    ->orWhere('first_name', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('last_name', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('work_email', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('phone_number', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('company_name', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('job_title', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('company_size', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('contact_on_behalf_of', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('company_type', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('expected_learners', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('country', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('teaching_interest', 'like', '%' . $request->get('key') . '%')
                    ->orWhere('description', 'like', '%' . $request->get('key') . '%');
            });
        }
        $corporatePartnerships = $query->paginate(10);

        return view('admin.corporate-partnership.index', [
            'corporatePartnerships' => $corporatePartnerships
        ]);
    }
}
