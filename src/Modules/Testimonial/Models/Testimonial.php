<?php

namespace Logixs\Modules\Testimonial\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $id
 * @property string $name
 * @property string $image
 * @property string $designation
 * @property string $company
 * @property string $description
 * @property string $other
 */
class Testimonial extends Model
{
    protected $table = 'testimonials';
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

    public function designation(): string
    {
        return $this->designation;
    }

    public function company(): string
    {
        return $this->company;
    }

    public function description(): string
    {
        return $this->description;
    }

    public function other(): ?string
    {
        return $this->other;
    }
}
