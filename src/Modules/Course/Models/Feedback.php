<?php

namespace Logixs\Modules\Course\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int    $id
 * @property string $title
 * @property string $feedback
 * @property int    $rating
 * @property int    $course_id
 */
class Feedback extends Model
{
    protected $table = 'feedback';
    protected $dateFormat = 'Y-m-d H:i:s';

    public function id(): int
    {
        return $this->id;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function feedback(): string
    {
        return $this->feedback;
    }

    public function rating(): int
    {
        return $this->rating;
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
