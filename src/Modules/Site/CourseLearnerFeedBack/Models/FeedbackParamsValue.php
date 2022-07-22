<?php

namespace Logixs\Modules\Site\CourseLearnerFeedBack\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $instructor_feedback_id
 * @property mixed $course_feedback_id
 * @property int $course_feedback_param_id
 * @property string $course_feedback_param_value
 */
class FeedbackParamsValue extends Model
{
    protected $table = 'feedback_param_values';

    public function id(): int
    {
        return $this->id;
    }

    public function instructorFeedbackId(): ?int
    {
        return $this->instructor_feedback_id;
    }

    public function courseFeedbackId(): ?int
    {
        return $this->course_feedback_id;
    }

    public function courseFeedbackParamId(): int
    {
        return $this->course_feedback_param_id;
    }

    public function courseFeedbckValue(): string
    {
        return $this->course_feedback_param_value;
    }
}
