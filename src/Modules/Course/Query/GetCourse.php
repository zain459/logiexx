<?php

namespace Logixs\Modules\Course\Query;

use Logixs\Services\SaveImage;
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

    public static function store(array $data, string $path, $filePath, $licensingInformationImagePath): Course
    {
        /** @var $course */
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
        $course->description = $data['description'];
        $course->venue = $data['venue'];
        $course->platform = $data['platform'];
        $course->fee_type = $data['feeType'];


        if (isset($data['feeAmount'])) {
            $course->fee_amount = $data['feeAmount'];
        }

        $course->image = $path;
        $course->file = $filePath;
        $course->licensing_information_image = $licensingInformationImagePath;
        $course->link = $data['link'];
        $course->save();

        return $course;
    }

    public static function update(array $data, int $id, $request): void
    {
        /** @var Course $course */
        $course = Course::query()->findOrFail($id);
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
        $course->description = $data['description'];
        $course->venue = $data['venue'];
        $course->fee_type = $data['feeType'];
        $course->link = $data['link'];

        if (isset($data['feeAmount'])) {
            $course->fee_amount = $data['feeAmount'];
        }
        if (isset($data['image'])) {
            /** @var \Illuminate\Http\UploadedFile * */
            $file = $request->file('image');
            $path = SaveImage::save($file);
            $course->image = $path;
        }
        if (isset($data['licensing_information_image'])) {
            /** @var \Illuminate\Http\UploadedFile * */
            $file = $request->file('licensing_information_image');
            $path = SaveImage::save($file);
            $course->licensing_information_image = $path;
        }

        if (isset($data['file'])) {
            /** @var \Illuminate\Http\UploadedFile * */
            $file = $request->file('file');
            $path = SaveImage::save($file);
            $course->file = $path;
        }

        $course->save();
    }
}
