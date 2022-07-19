<?php

namespace App\Models\FeedBack;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $category
 * @property string $title
 */
class FeedBack extends Model
{
    protected $table = 'feedback_params';

    public function id(): int
    {
        return $this->id;
    }

    public function category(): string
    {
        return $this->category;
    }

    public function title(): string
    {
        return $this->title;
    }
}
