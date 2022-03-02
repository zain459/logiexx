<?php

namespace Logixs\Controllers\Modules\Inventory\Model;

use Illuminate\Database\Eloquent\Model;

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
}
