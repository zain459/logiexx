<?php

namespace Logixs\Modules\Site\MailingList\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Logixs\Modules\Site\MailingList\Models\MailingList;

class MailingListStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $this->validate($request, [
            'email' => ['required', 'string', 'unique:mailing_list,email'],
        ]);
        $mailingList = new MailingList();
        $mailingList->email = $data['email'];
        $mailingList->save();

        return redirect()->route('site.index');
    }
}
