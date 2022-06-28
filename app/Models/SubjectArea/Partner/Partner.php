<?php

namespace App\Models\SubjectArea\Partner;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $id
 * @property string $link
 * @property string $image
 */
class Partner extends Model
{
    protected $table = 'partners';
    protected $dateFormat = 'Y-m-d H:i:s';

    public function id(): int
    {
        return $this->id;
    }

    public function link(): string
    {
        return $this->link;
    }

    public function image(): string
    {
        return $this->image;
    }
}
