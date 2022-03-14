<?php

namespace Logixs\Modules\Event\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int         $id
 * @property string      $title
 * @property string      $description
 * @property Carbon      $start_date
 * @property Carbon      $end_date
 * @property string|null $link
 * @property string|null $image
 */
class Event extends Model
{
    protected $table = 'events';
    protected $dateFormat = 'Y-m-d H:i:s';

    public function id(): int
    {
        return $this->id;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function description(): string
    {
        return $this->description;
    }

    public function link(): ?string
    {
        return $this->link;
    }

    public function image(): ?string
    {
        return $this->image;
    }

    public function startDate(): Carbon
    {
        return Carbon::parse($this->start_date);
    }

    public function endDate(): Carbon
    {
        return Carbon::parse($this->end_date);
    }
}
