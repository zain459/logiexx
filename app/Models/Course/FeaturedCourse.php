<?php

namespace App\Models\Course;

use Illuminate\Database\Eloquent\Model;
use Logixs\Modules\Course\Models\Course;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $course_id
 * @property int $type_id
 */
class FeaturedCourse extends Model
{
    const TRENDING = 1;
    const POPULAR = 2;
    const EDITOR = 3;

    protected $table = 'featured_courses';

    public function id(): int
    {
        return $this->id;
    }

    public function type(): string
    {
        if ($this->type_id === self::TRENDING) {
            return 'Trending';
        }
        if ($this->type_id === self::POPULAR) {
            return 'Popular';
        }
        if ($this->type_id === self::EDITOR) {
            return 'Editor';
        }
        return 'un know';
    }

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }
}
