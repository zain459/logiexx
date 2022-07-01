<?php

namespace Logixs\Modules\Site\CorporatePartnership\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $company_name
 * @property string $work_email
 * @property string $phone_number
 * @property string $job_title
 * @property string $teaching_interest
 * @property string $description
 * @property string $company_size
 * @property string $contact_on_behalf_of
 * @property string $company_type
 * @property string $expected_learners
 * @property string $country
 *
 */
class CorporatePartnership extends Model
{
    protected $table = 'corporate_partnership';

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

    public function companyName(): string
    {
        return $this->company_name;
    }

    public function phoneNumber(): string
    {
        return $this->phone_number;
    }

    public function jobTitle(): string
    {
        return $this->job_title;
    }

    public function teachingInterest(): string
    {
        return $this->teaching_interest;
    }

    public function description(): string
    {
        return $this->description;
    }

    public function companySize(): string
    {
        return $this->company_size;
    }

    public function contactOnBehalfOf()
    {
        return $this->contact_on_behalf_of;
    }

    public function companyType()
    {
        return $this->company_type;
    }

    public function expectedLearners()
    {
        return $this->expected_learners;
    }

    public function country(): string
    {
        return $this->country;
    }
}
