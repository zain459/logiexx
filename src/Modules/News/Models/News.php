<?php

namespace Logixs\Modules\News\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $id
 * @property string $link
 * @property string $title
 * @property string $image
 * @property string $short_description
 * @property string $long_description
 * @property string $posted_date
 */
class News extends Model
{
    protected $table = 'news';
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
