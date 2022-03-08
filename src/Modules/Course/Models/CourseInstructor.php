<?php

namespace Logixs\Modules\Course\Models;

use Illuminate\Database\Eloquent\Model;
use Logixs\Modules\Instructor\Models\Instructor;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $instructor_id
 * @property int $course_id
 */
class CourseInstructor extends Model
{
    protected $table = 'course_instructors';
    protected $dateFormat = 'Y-m-d H:i:s';

    public function id(): int
    {
        return $this->id;
    }

    public function instructorId(): int
    {
        return $this->instructor_id;
    }

    public function courseId(): int
    {
        return $this->course_id;
    }

    public function instructor(): BelongsTo
    {
        return $this->belongsTo(Instructor::class, 'instructor_id');
    }
}
