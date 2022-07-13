<?php

namespace Logixs\Modules\Site\CourseLearnerFeedBack\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Logixs\Modules\Course\Models\Course;

/**
 * @property int $id
 * @property int $course_id
 * @property int $course_content
 * @property int $days_allocated_course
 * @property int $delivery_method
 * @property string $recommend_improvements_course
 * @property string $comment_on_continuing_appropriateness
 * @property string $like_most_about_course
 * @property string $like_us_know_about_course
 * @property int $quality_of_course
 */
class CourseLearnerFeedBack extends Model
{
    protected $table = 'course_learner_feedback';

    public function id(): int
    {
        return $this->id;
    }

    public function courseId(): int
    {
        return $this->course_id;
    }

    public function courseContent(): int
    {
        return $this->course_content;
    }

    public function daysAllocatedCourse(): int
    {
        return $this->days_allocated_course;
    }

    public function deliveryMethod(): int
    {
        return $this->delivery_method;
    }

    public function recommendImprovementsCourse(): string
    {
        return $this->recommend_improvements_course;
    }

    public function commentOnContinuingAppropriateness(): string
    {
        return $this->comment_on_continuing_appropriateness;
    }

    public function likeMostAboutCourse(): string
    {
        return $this->like_most_about_course;
    }

    public function likeUsKnowAboutCourse(): string
    {
        return $this->like_us_know_about_course;
    }

    public function qualityOfCourse(): int
    {
        return $this->quality_of_course;
    }

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }
}
