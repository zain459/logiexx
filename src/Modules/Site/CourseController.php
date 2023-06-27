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
        $filters = $request->all();
//        dd($filters);
        $query = Course::with(['category']);
        $count = $query->count();

        if (isset($filters['subject_areas'])) {
            $query->whereIn('subject_area_id', $filters['subject_areas']);
        }

        if (isset($filters['fee_type'])) {
            $query->whereIn('fee_type', $filters['fee_type']);
        }

        if (isset($filters['difficulty_level'])) {
            $query->whereIn('difficulty_level', $filters['difficulty_level']);
        }

        if (isset($filters['course_start_date'])) {
            $query->whereIn('course_start_date', $filters['course_start_date']);
        }

        if (isset($filters['duration_interval'])) {
            $query->whereIn('duration_interval', $filters['duration_interval']);
        }

        if (isset($filters['modality'])) {
            $query->whereIn('modality', $filters['modality']);
        }
        $courses = $query->paginate(6);
        $subjectFields = SubjectArea::all();

        return view('site.course', [
            'filters' => $filters,
            'count' => $count,
            'courses' => $courses,
            'subjectFields' => $subjectFields,
        ]);
    }
}
