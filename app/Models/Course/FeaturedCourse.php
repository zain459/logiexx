<?php

namespace App\Models\Course;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $course_id
 * @property string $type_id
 */
class FeaturedCourse extends Model
{
    const POPULAR  = 1;
    const TRENDING = 2;
    const EDITOR = 3;

    protected $table = 'featured_courses';
}
