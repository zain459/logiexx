<?php

namespace Logixs\Modules\site\CorporatePartnership\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Logixs\Modules\Site\CorporatePartnership\Models\CorporatePartnership;

class CorporatePartnershipStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $this->validate($request, [
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'work_email' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
            'company_name' => ['required', 'string'],
            'job_title' => ['required', 'string'],
            'company_size' => ['required', 'string'],
            'contact_on_behalf_of' => ['required', 'string'],
            'company_type' => ['required', 'string'],
            'expected_learners' => ['required', 'string'],
            'country' => ['required', 'string'],
            'teaching_interest' => ['required', 'array'],
            'description' => ['nullable', 'string'],
        ]);
       
        $corporatePartnership = new  CorporatePartnership();
        $corporatePartnership->first_name = $data['first_name'];
        $corporatePartnership->last_name = $data['last_name'];
        $corporatePartnership->work_email = $data['work_email'];
        $corporatePartnership->phone_number = $data['phone_number'];
        $corporatePartnership->company_name = $data['company_name'];
        $corporatePartnership->job_title = $data['job_title'];
        $corporatePartnership->company_size = $data['company_size'];
        $corporatePartnership->contact_on_behalf_of = $data['contact_on_behalf_of'];
        $corporatePartnership->company_type = $data['company_type'];
        $corporatePartnership->expected_learners = $data['expected_learners'];
        $corporatePartnership->country = $data['country'];
        $corporatePartnership->teaching_interest = implode(',', $data['teaching_interest']);
        $corporatePartnership->description = $data['description'];

        $corporatePartnership->save();
        flash('Successfully Submitted')->success()->important();

        return redirect()->route('site.corporate-partnership');

    }

}
