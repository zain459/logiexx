<?php

namespace App\Models\Course;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Logixs\Modules\Course\Models\Course;

/**
 * @property int $id
 * @property int $course_id
 * @property string $type_id
 */
class FeaturedCourse extends Model
{
    const TRENDING = 1;
    const POPULAR = 2;
    const EDITOR = 3;

    protected $table = 'featured_courses';

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }
}
