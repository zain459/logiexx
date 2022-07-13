<?php

namespace Logixs\Modules\Webinar\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property string $speaker
 * @property string $moderator
 * @property string $organization
 * @property string $sponsor
 * @property string $focal_person
 * @property string $focal_person_telephone
 * @property string $focal_person_email
 * @property string $link
 * @property string $meeting_id
 * @property string $passcode
 * @property string|null $image
 * @property string|null $link_image
 * @property string $short_description
 * @property Carbon $start_date
 * @property Carbon $end_date
 */
class Webinar extends Model
{
    protected $table = 'webinars_series';
    protected $dateFormat = 'Y-m-d H:i:s';

    public function id(): int
    {
        return $this->id;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function speaker(): string
    {
        return $this->speaker;
    }

    public function moderator(): string
    {
        return $this->moderator;
    }

    public function organization(): string
    {
        return $this->organization;
    }

    public function sponsor(): string
    {
        return $this->sponsor;
    }

    public function focalPerson(): string
    {
        return $this->focal_person;
    }

    public function link(): string
    {
        return $this->link;
    }

    public function meetingId(): string
    {
        return $this->meeting_id;
    }

    public function passcode(): string
    {
        return $this->passcode;
    }

    public function image(): ?string
    {
        return $this->image;
    }

    public function linkImage(): ?string
    {
        return $this->link_image;
    }

    public function shortDescription(): string
    {
        return $this->short_description;
    }

    public function startDate(): Carbon
    {
        return Carbon::parse($this->start_date);
    }

    public function focalPersonTelephone(): string
    {
        return $this->focal_person_telephone;
    }
    public function focalPersonEmail(): string
    {
        return $this->focal_person_email;
    }
    public function endDate(): Carbon
    {
        return Carbon::parse($this->end_date);
    }
}
