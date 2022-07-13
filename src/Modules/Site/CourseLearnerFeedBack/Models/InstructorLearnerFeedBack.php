<?php

namespace Logixs\Modules\Site\CourseLearnerFeedBack\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Logixs\Modules\Course\Models\Course;
use Logixs\Modules\Instructor\Models\Instructor;

/**
 * @property int $id
 * @property int $course_id
 * @property mixed $instructor_id
 * @property int $instructor_course_content
 * @property int $instructor_days_allocated_course
 * @property int $instructor_delivery_method
 * @property string $instructor_recommend_improvements_course
 * @property string $instructor_comment_on_continuing_appropriateness
 * @property string $instructor_like_most_about_course
 * @property string $instructor_like_us_know_about_course
 * @property int $instructor_quality_of_course
 */
class InstructorLearnerFeedBack extends Model
{
    protected $table = 'instructor_feedback';

    public function id(): int
    {
        return $this->id;
    }

    public function courseId(): int
    {
        return $this->course_id;
    }

    public function instructorId(): int
    {
        return $this->instructor_id;
    }

    public function instructorCourseContent(): int
    {
        return $this->instructor_course_content;
    }

    public function instructorDaysAllocatedCourse(): int
    {
        return $this->instructor_days_allocated_course;
    }

    public function instructorDeliveryMethod(): int
    {
        return $this->instructor_delivery_method;
    }

    public function instructorRecommendImprovementsCourse(): string
    {
        return $this->instructor_recommend_improvements_course;
    }

    public function instructorCommentOnContinuingAppropriateness(): string
    {
        return $this->instructor_comment_on_continuing_appropriateness;
    }

    public function instructorLikeMostAboutCourse(): string
    {
        return $this->instructor_like_most_about_course;
    }

    public function instructorLikeUsKnowAboutCourse(): string
    {
        return $this->instructor_like_us_know_about_course;
    }

    public function instructorQualityOfCourse(): int
    {
        return $this->instructor_quality_of_course;
    }

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }

    public function instructor(): BelongsTo
    {
        return $this->belongsTo(Instructor::class, 'instructor_id', 'id');
    }
}
