<?php

namespace Logixs\Modules\Site\Enrollment\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Logixs\Modules\Course\Models\Course;
use Logixs\Modules\Course\Models\EnrollmentStatus;
use phpDocumentor\Reflection\Types\Boolean;

/**
 * @property int $id
 * @property int $course_id
 * @property string $title
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $degree
 * @property string $telephone
 * @property int $code
 * @property string $email
 * @property string $personal_address
 * @property string $personal_city
 * @property string $personal_post_code
 * @property string $personal_province
 * @property string $personal_country
 * @property int $employment_status;
 * @property string $position
 * @property string $department
 * @property string $institution
 * @property string $institution_address
 * @property string $institution_city
 * @property string $institution_post_code
 * @property string $institution_province_state
 * @property string $institution_country
 * @property bool $verifiable_certificate
 * @property string $file
 * @property string $description
 * @property string $file_type
 * @property string $file_name
 * @property float $file_size
 * @property bool $status
 */
class Enrollment extends Model
{
    protected $table = 'course_enrollments';

    public function id(): int
    {
        return $this->id;
    }

    public function courseId(): int
    {
        return $this->course_id;
    }

    public function title(): string
    {
        return $this->title;
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

    public function code(): CountryTelephoneCode
    {
        return CountryTelephoneCode::formId((int)$this->code);
    }

    public function telephone(): string
    {
        return $this->telephone;
    }

    public function email(): string
    {
        return $this->email;
    }

    public function personalAddress(): string
    {
        return $this->personal_address;
    }

    public function personalCity(): string
    {
        return $this->personal_city;
    }

    public function personalPostCode(): string
    {
        return $this->personal_post_code;
    }

    public function province(): string
    {
        return $this->personal_province;
    }

    public function personalCountry(): string
    {
        return $this->personal_country;
    }

    public function employmentStatus(): EmploymentStatus
    {
        return EmploymentStatus::formId((int)$this->employment_status);
    }

    public function position(): string
    {
        return $this->position;
    }

    public function department(): string
    {
        return $this->department;
    }

    public function institution(): string
    {
        return $this->institution;
    }

    public function institutionAddress(): string
    {
        return $this->institution_address;
    }

    public function institutionCity(): string
    {
        return $this->institution_city;
    }

    public function institutionPostCode(): string
    {
        return $this->institution_post_code;
    }

    public function provinceState(): string
    {
        return $this->institution_province_state;
    }

    public function institutionCountry(): string
    {
        return $this->institution_country;
    }

    public function verifiableCertificate(): bool
    {
        return $this->verifiable_certificate;

    }
    public function status():bool{
        return $this->status;
    }

    public function file(): string
    {
        return $this->file;
    }

    public function description(): string
    {
        return $this->description;
    }

    public function fileType(): string
    {
        return $this->file_type;
    }

    public function fileName(): string
    {
        return $this->file_name;
    }

    public function fileSize(): float
    {
        return $this->file_size;
    }

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }

}
