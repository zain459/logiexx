<?php

namespace Logixs\Modules\Course\Query;

use Logixs\Modules\Course\Models\Pace;
use Logixs\Modules\Course\Models\Course;
use Logixs\Modules\Course\Models\Language;
use Logixs\Modules\Course\Models\Modality;
use Illuminate\Database\Eloquent\Collection;
use Logixs\Modules\Course\Models\DifficultyLevel;
use Logixs\Modules\Course\Models\StartDateStatus;
use Logixs\Modules\Course\Models\DurationInterval;

final class GetCourse
{
    public static function get(): Collection
    {
        return Course::with(['category', 'subjectArea'])->get();
    }

    public static function store(array $data, string $path): void
    {
        $course = new Course();
        $course->title = $data['title'];
        $course->category_id = $data['categoryId'];
        $course->subject_area_id = $data['subjectArea'];
        $course->language = Language::fromId($data['language'])->id();
        $course->difficulty_level = DifficultyLevel::fromId($data['difficultyLevel'])->id();
        $course->start_date_status = StartDateStatus::fromId($data['dateStatus'])->id();
        $course->duration_interval = DurationInterval::fromId($data['durationInterval'])->id();
        $course->modality = Modality::fromId($data['modality'])->id();
        $course->pace = Pace::fromId($data['pace'])->id();
        $course->class_size = $data['classSize'];
        $course->time_commitment = $data['timeCommitment'];
        $course->course_code = $data['courseCode'];
        $course->duration = $data['duration'];
        $course->course_start_date = $data['courseStartDate'];
        $course->overview = $data['overview'];
        $course->fee_type = $data['feeType'];

        if (isset($data['feeAmount'])) {
            $course->fee_amount = $data['feeAmount'];
        }

        $course->image = $path;
        $course->save();
    }
}
