<?php

namespace Logixs\Modules\Site\MailingList\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $email
 */
class MailingList extends Model
{
    protected $table = 'mailing_list';

    public function id(): int
    {
        return $this->id;
    }

    public function email(): string
    {
        return $this->email;
    }


}
