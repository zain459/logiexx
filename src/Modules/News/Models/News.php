<?php

namespace Logixs\Modules\News\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $link
 * @property string $title
 * @property string $image
 * @property string $short_description
 * @property string $long_description
 * @property string $posted_date
 * @property boolean $status
 */
class News extends Model
{
    protected $table = 'news';
    protected $dateFormat = 'Y-m-d H:i:s';

    public function id(): int
    {
        return $this->id;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function shortDescription(): string
    {
        return $this->short_description;
    }

    public function longDescription(): string
    {
        return $this->long_description;
    }
    public function postedDate():string{
        return $this->posted_date;
    }

    public function link(): ?string
    {
        return $this->link;
    }

    public function image(): ?string
    {
        return $this->image;
    }
}
