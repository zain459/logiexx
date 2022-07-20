<?php

namespace App\Models\CourseFeedBackParams;

use App\Models\FeedBackParams\FeedBackParams;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Logixs\Modules\Course\Models\Course;

/**
 * @property int $id
 * @property int $feedback_params_id
 * @property int $course_id
 * @property string $type
 */
class CourseFeedBackParams extends Model
{
    protected $table = 'course_feedback_params';

    public function id(): int
    {
        return $this->id;
    }

    public function feedBackParamsId(): int
    {
        return $this->feedback_params_id;
    }

    public function courseId(): int
    {
        return $this->course_id;
    }

    public function type(): string
    {
        return $this->type;
    }

    public function course():BelongsTo
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }

    public function feedbackParam():BelongsTo{
        return $this->belongsTo(FeedBackParams::class,'feedback_params_id', 'id');
    }
}
