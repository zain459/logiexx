<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $degree
 * @property string $telephone
 * @property string $email
 * @property string $address
 * @property string $city
 * @property string $post_code
 * @property string $province
 * @property string $country
 * @property string $teaching_interest
 * @property string $subject_areas
 * @property string $tentative_course_title
 * @property string $available_to_start_work
 * @property string $date
 * @property string $file
 */
class BecomeAnInstructor extends Model
{
    protected $table = 'become_an_instructor';
    protected $dateFormat = 'Y-m-d H:i:s';

    public function id(): int
    {
        return $this->id;
    }

    public function firstName(): string
    {
        return $this->first_name;
    }

    public function middleName(): string
    {
        return $this->middle_name;
    }

    public function lastName(): string
    {
        return $this->last_name;
    }

    public function degree(): string
    {
        return $this->degree;
    }

    public function telephone(): string
    {
        return $this->telephone;
    }

    public function email(): string
    {
        return $this->email;
    }

    public function address(): string
    {
        return $this->address;
    }

    public function city(): string
    {
        return $this->city;
    }

    public function postCode(): string
    {
        return $this->post_code;
    }

    public function province(): string
    {
        return $this->province;
    }

    public function country(): string
    {
        return $this->country;
    }

    public function teachingInterest(): string
    {
        return $this->teaching_interest;
    }

    public function subjectAreas(): string
    {
        return $this->subject_areas;
    }

    public function tentativeCourseTitle(): string
    {
        return $this->tentative_course_title;
    }

    public function availableToStartWork(): string
    {
        return $this->available_to_start_work;
    }

    public function date(): Carbon
    {
        return Carbon::parse($this->date);
    }

    public function file(): string
    {
        return $this->file;
    }
}
