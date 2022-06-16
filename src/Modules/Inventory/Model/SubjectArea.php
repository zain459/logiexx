<?php

namespace Logixs\Modules\Inventory\Model;

use Illuminate\Database\Eloquent\Model;
use Logixs\Modules\Course\Models\Course;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property string $name
 * @property string $image
 */
class SubjectArea extends Model
{
    protected $table = 'subject_areas';
    protected $dateFormat = 'Y-m-d H:i:s';

    public function id(): int
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function image(): string
    {
        return $this->image;
    }

    public function course(): HasMany
    {
        return $this->hasMany(Course::class);
    }
}
