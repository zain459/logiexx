<?php

namespace Logixs\Modules\Course\Models;

use App\Models\Category\Category;
use App\Models\SubjectArea\SubjectArea;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property int $category_id
 * @property int $subject_area_id
 * @property int $language
 * @property int $difficulty_level
 * @property int $start_date_status
 * @property int $duration_interval
 * @property string $duration
 * @property int $modality
 * @property int $pace
 * @property int $fee_type
 * @property float|null $fee_amount
 * @property string $title
 * @property string $overview
 * @property string $platform
 * @property int $class_size
 * @property string $time_commitment
 * @property Carbon $course_start_date
 * @property string $course_code
 * @property string $venue
 * @property string $description
 * @property string $image
 * @property Carbon $created_at
 */
class Course extends Model
{
    protected $table = 'courses';
    protected $dateFormat = 'Y-m-d H:i:s';

    public function id(): int
    {
        return $this->id;
    }

    public function categoryId(): int
    {
        return $this->category_id;
    }

    public function SubjectAreaId(): int
    {
        return $this->subject_area_id;
    }

    public function language(): Language
    {
        return Language::fromId((int)$this->language);
    }

    public function durationInterval(): DurationInterval
    {
        return DurationInterval::fromId((int)$this->duration_interval);
    }

    public function difficultyLevel(): DifficultyLevel
    {
        return DifficultyLevel::fromId((int)$this->difficulty_level);
    }

    public function startDateStatus(): StartDateStatus
    {
        return StartDateStatus::fromId((int)$this->start_date_status);
    }

    public function modality(): Modality
    {
        return Modality::fromId((int)$this->modality);
    }

    public function pace(): Pace
    {
        return Pace::fromId((int)$this->pace);
    }

    public function description(): string
    {
        return $this->description;
    }

    public function feeType(): string
    {
        return $this->fee_type;
    }

    public function venue(): string
    {
        return $this->venue;
    }

    public function platform(): string
    {
        return $this->platform;
    }

    public function duration(): string
    {
        return $this->duration;
    }

    public function feeAmount(): ?float
    {
        return $this->fee_amount;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function overview(): string
    {
        return $this->overview;
    }

    public function classSize(): int
    {
        return $this->class_size;
    }

    public function timeCommitment(): string
    {
        return $this->time_commitment;
    }

    public function courseStartDate(): Carbon
    {
        return Carbon::parse($this->course_start_date);
    }

    public function courseCode(): string
    {
        return $this->course_code;
    }

    public function image(): string
    {
        return $this->image;
    }

    public function createdAt(): Carbon
    {
        return $this->created_at;
    }

    public function courseDetails(): HasMany
    {
        return $this->hasMany(CourseOtherInfo::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function subjectArea(): BelongsTo
    {
        return $this->belongsTo(SubjectArea::class, 'subject_area_id');
    }

}
