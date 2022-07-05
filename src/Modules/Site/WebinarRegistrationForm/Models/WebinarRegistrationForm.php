<?php

namespace Logixs\Modules\Site\WebinarRegistrationForm\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string first_name
 * @property string last_name
 * @property string work_email
 * @property string phone_number
 * @property string organization_name
 * @property string occupation_type
 * @property string subject_area
 * @property string hear_about_webinar
 * @property string verifiable_certificate
 * @property string description
 * @property string file
 */
class WebinarRegistrationForm extends Model
{
    protected $table = 'webinar_registration';

    public function id(): int
    {
        return $this->id;
    }

    public function firstName(): string
    {
        return $this->first_name;
    }

    public function lastName(): string
    {
        return $this->last_name;
    }

    public function workEmail(): string
    {
        return $this->work_email;
    }

    public function phoneNumber(): string
    {
        return $this->phone_number;
    }

    public function organizationName(): string
    {
        return $this->organization_name;
    }

    public function occupationType(): string
    {
        return $this->occupation_type;
    }

    public function subjectArea(): string
    {
        return $this->subject_area;
    }

    public function hearAboutWebinar(): string
    {
        return $this->hear_about_webinar;
    }

    public function verifiableCertificate(): string
    {
        return $this->verifiable_certificate;
    }

    public function description(): string
    {
        return $this->description;
    }

    public function file(): string
    {
        return $this->file;
    }
}
