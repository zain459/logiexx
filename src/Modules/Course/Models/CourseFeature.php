<?php

namespace Logixs\Modules\Course\Models;

use Illuminate\Database\Eloquent\Model;
use Logixs\Modules\Inventory\Model\Feature;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $feature_id
 * @property int $course_id
 */
class CourseFeature extends Model
{
    protected $table = 'course_features';
    public function id(): int
    {
        return $this->id;
    }

    public function featureId(): int
    {
        return $this->feature_id;
    }

    public function courseId(): int
    {
        return $this->course_id;
    }

    public function feature():BelongsTo
    {
        return $this->belongsTo(Feature::class, 'feature_id','id');
    }

    public function course():BelongsTo{
        return $this->belongsTo(Course::class);
    }
}
