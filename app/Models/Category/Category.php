<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Logixs\Modules\Course\Models\Course;

/**
 * @property int    $id
 * @property string $name
 */
class Category extends Model
{
    protected $table = 'categories';
    protected $dateFormat = 'Y-m-d H:i:s';

    public function id(): int
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function course(): HasMany
    {
        return $this->hasMany(Course::class);
    }
}
