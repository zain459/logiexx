<?php

namespace Logixs\Modules\Course\Controllers;

use App\Models\SubjectArea\Partner\Partner;
use Logixs\Modules\Course\Models\Course;
use Logixs\Modules\Course\Models\CoursePartner;

class CoursePartnerIndexController
{
    public function __invoke(int $id)
    {
        /** @var Course $course */
        $course = Course::query()->findOrFail($id);

        $partners = Partner::all();
        $assignedPartners = CoursePartner::with('partner')->where('course_id', $course->id())->get();

        return view('course.partner-index', [
            'course' => $course,
            'partners' => $partners,
            'assignedPartners' => $assignedPartners,
        ]);
    }
}
