<?php

namespace Logixs\Modules\Course\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $course_id
 * @property string $sub_heading
 * @property string $description
 * @property ?string $image
 */
class CoreFeatureSection extends Model
{
    protected $table = 'why_logixs_section';

    public function id(): int
    {
        return $this->id;
    }

    public function courseId(): int
    {
        return $this->course_id;
    }

    public function subHeading(): string
    {
        return $this->sub_heading;
    }

    public function description(): string
    {
        return $this->description;
    }

    public function image(): ?string
    {
        return $this->image;
    }

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

}
