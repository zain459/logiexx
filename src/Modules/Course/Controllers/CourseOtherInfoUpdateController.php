<?php

namespace Logixs\Modules\Course\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Logixs\Modules\Course\Models\CourseOtherInfo;

class CourseOtherInfoUpdateController extends Controller
{
    public function __invoke(Request $request, int $id)
    {
        $data = $this->validate($request, [
            'title' => ['required', 'string', 'max:100'],
            'description' => ['required', 'string'],
        ]);

        /** @var CourseOtherInfo $info */
        $info = CourseOtherInfo::query()->findOrFail($id);
        $info->title = $data['title'];
        $info->description = $data['description'];
        $info->save();

        flash('course other details updated')->success();

        return redirect()->back();

    }

}
