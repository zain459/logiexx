<?php

namespace App\Models\OrganizationTrust;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $link
 * @property string $image
 */
class OrganizationTrust extends Model
{
    protected $table = 'organization_trust';

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
