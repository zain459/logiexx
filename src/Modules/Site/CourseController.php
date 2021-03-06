<?php

namespace Logixs\Modules\Site;

use App\Models\SubjectArea\SubjectArea;
use Illuminate\Http\Request;
use Logixs\Modules\Course\Models\Course;
use PhpParser\Node\Stmt\DeclareDeclare;

class CourseController
{
    public function __invoke(Request $request)
    {
//        dd($request->all());
        $filters = $request->all();

        $query = Course::with(['category']);
        if (isset($filters['subject_areas'])) {
            $query->whereIn('subject_area_id', $filters['subject_areas']);
        }

        if (isset($filters['fee_type'])) {
            $query->whereIn('fee_type', $filters['fee_type']);
        }

        if (isset($filters['difficulty_level'])) {
            $query->whereIn('difficulty_level', $filters['difficulty_level']);
        }

        if (isset($filters['start_date_status'])) {
            $query->whereIn('start_date_status', $filters['start_date_status']);
        }

        if (isset($filters['duration_interval'])) {
            $query->whereIn('duration_interval', $filters['duration_interval']);
        }

        if (isset($filters['modality'])) {
            $query->whereIn('modality', $filters['modality']);
        }
        $courses = $query->paginate(6);
        $subjectAreas = SubjectArea::all();

        return view('site.course', [
            'filters' => $filters,
            'courses' => $courses,
            'subjectAreas' => $subjectAreas
        ]);
    }
}
