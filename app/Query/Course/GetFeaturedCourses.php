<?php

namespace App\Query\Course;

use App\Models\Course\FeaturedCourse;
use Logixs\Modules\Course\Models\Course;

class GetFeaturedCourses
{
    public static function trending()
    {
        return static::getFeaturedCoursesByType(FeaturedCourse::TRENDING);
    }

    public static function popular()
    {
        return static::getFeaturedCoursesByType(FeaturedCourse::POPULAR);
    }

    public static function editorPick()
    {
        return static::getFeaturedCoursesByType(FeaturedCourse::EDITOR);
    }

    private static function getFeaturedCoursesByType(int $type)
    {
        return Course::query()
            ->join('featured_courses', 'featured_courses.course_id', 'courses.id')
            ->where('type_id', $type)
            ->limit(3)
            ->get();
    }
}
