<?php

namespace Logixs\Modules\Course\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int    $id
 * @property string $title
 * @property string $description
 * @property int    $course_id
 */
class CourseOtherInfo extends Model
{
    protected $table = 'course_other_infos';
    protected $dateFormat = 'Y-m-d H:i:s';

    public function id(): int
    {
        return $this->id;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function description(): string
    {
        return $this->description;
    }

    public function courseId(): int
    {
        return $this->course_id;
    }

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
