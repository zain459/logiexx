<?php

namespace Logixs\Modules\Inventory\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $course_id
 * @property string $type
 * @property int $trending_course
 * @property int $popular_course
 * @property int $editor_pick_course
 */
class Feature extends Model
{
    protected $table = 'feature';

    public function id(): int
    {
        return $this->id;
    }

    public function courseId(): int
    {
        return $this->course_id;
    }

    public function type(): string
    {
        return $this->type;
    }
//    public function trending(): int
//    {
//        return $this->trending_course;
//    }
//
//    public function popular(): int
//    {
//        return $this->popular_course;
//    }
//
//    public function editorPickCourse(): int
//    {
//        return $this->editor_pick_course;
//    }

}
