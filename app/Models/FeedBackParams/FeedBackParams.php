<?php

namespace App\Models\FeedBackParams;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $category
 * @property string $title
 */
class FeedBackParams extends Model
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
