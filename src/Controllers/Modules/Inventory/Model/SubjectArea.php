<?php

namespace Logixs\Controllers\Modules\Inventory\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $id
 * @property string $name
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
}
