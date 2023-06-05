<?php

namespace Logixs\Modules\Course\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $course_id
 * @property string $main_heading
 * @property string $sub_heading
 * @property string $description
 * @property ?string $image
 */
class WhyLogixsSection extends Model
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

    public function mainHeading(): string
    {
        return $this->main_heading;
    }

    public function subHeading(): string
    {
        return $this->sub_heading;
    }

    public function image(): ?string
    {
        return $this->image;
    }

}
