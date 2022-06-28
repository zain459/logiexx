<?php

namespace Logixs\Modules\Course\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $course_id
 * @property string $title
 * @property Carbon $date
 * @property int $class_seat
 * @property int $modality
 * @property string $venue
 * @property string $class_duration
 * @property string $class_hand_outs
 */
class CourseClass extends Model
{
    protected $table = 'classes';
    protected $dateFormat = 'Y-m-d H:i:s';

    public function id(): int
    {
        return $this->id;
    }

    public function courseId(): int
    {
        return $this->course_id;
    }

    public function modality(): Modality
    {
        return Modality::fromId((int)$this->modality);
    }

    public function title(): string
    {
        return $this->title;
    }

    public function date(): Carbon
    {
        return Carbon::parse($this->date);
    }

    public function classSeat(): int
    {
        return $this->class_seat;
    }

    public function venue(): string
    {
        return $this->venue;
    }

    public function classDuration(): string
    {
        return $this->class_duration;
    }

    public function classHandOuts(): string
    {
        return $this->class_hand_outs;
    }

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::Class, 'course_id', 'id');
    }
}
