<?php

namespace Logixs\Modules\Course\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Logixs\Modules\Inventory\Model\Category;
use Logixs\Modules\Inventory\Model\SubjectArea;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int    $id
 * @property string $name
 * @property int    $category_id
 * @property int    $subject_area_id
 * @property int    $language
 * @property int    $difficulty_level
 * @property int    $start_date_status
 * @property int    $duration
 * @property int    $modality
 * @property int    $pace
 * @property int    $fee_type
 * @property ?float $fee_amount
 * @property string $title
 * @property string $overview
 * @property int    $class_size
 * @property Carbon $time_commitment
 * @property Carbon $course_start_date
 * @property string $course_code
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

    public function name(): string
    {
        return $this->name;
    }

    public function categoryId(): int
    {
        return $this->category_id;
    }

    public function SubjectAreaId(): int
    {
        return $this->subject_area_id;
    }

    public function language(): int
    {
        return $this->language;
    }

    public function difficultyLevel(): int
    {
        return $this->difficulty_level;
    }

    public function startDateStatus(): int
    {
        return $this->start_date_status;
    }

    public function modality(): int
    {
        return $this->modality;
    }

    public function pace(): int
    {
        return $this->pace;
    }

    public function feeType(): int
    {
        return $this->fee_type;
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

    public function timeCommitment(): Carbon
    {
        return $this->time_commitment;
    }

    public function courseStartDate(): Carbon
    {
        return $this->course_start_date;
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

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function subjectArea(): BelongsTo
    {
        return $this->belongsTo(SubjectArea::class, 'subject_area_id');
    }
}
