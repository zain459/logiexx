<?php

namespace App\Models\Registration;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Logixs\Modules\Course\Models\CourseClass;

/**
 * @property int $id
 * @property int $class_id
 * @property string|null $registration_no
 * @property int|null $form_no
 * @property boolean|null $is_registered
 * @property string|null $full_name
 * @property string|null $father_husband_name
 * @property Carbon|null $date_of_birth
 * @property string|null $gender
 * @property string|null $marital_status
 * @property string|null $c_n_i_c
 * @property string|null $passport_no
 * @property string|null $religion
 * @property string|null $nationality
 * @property string|null $blood_group
 * @property string|null $preferred_learning_method
 * @property string|null $residential_address
 * @property string|null $postal_code
 * @property string|null $city
 * @property string|null $country
 * @property string|null $telephone
 * @property string|null $code
 * @property string|null $phone
 * @property string|null $personal_email
 * @property string|null $educational_qualification
 * @property string|null $employment_status
 * @property string|null $business_type_designation
 * @property string|null $business_name
 * @property string|null $official_address
 * @property string|null $official_telephone
 * @property string|null $institutional_email
 * @property string|null $activity_type
 * @property string|null $activity_title
 * @property boolean|null $is_paid
 * @property string|null $course_fee
 * @property string|null $course_tax
 * @property string|null $sponsor_name
 * @property string|null $contact_person
 * @property string|null $sponsor_mobile
 * @property string|null $sponsor_email
 * @property string|null $sponsor_address
 * @property string|null $certificate_nominal_fee
 * @property string|null $certificate_charge
 * @property string|null $emergency_name
 * @property string|null $emergency_relationship
 * @property string|null $emergency_mobile_no
 * @property string|null $file
 */
class Registration extends Model
{
    protected $table = 'registration';

    public function id(): int
    {
        return $this->id;
    }

    public static function formNo(): int
    {
        return '10000';
    }

    public function classId(): int
    {
        return $this->class_id;
    }

    public function registrationNo(): ?string
    {
        return $this->registration_no;
    }

    public function isRegistered(): bool
    {
        return $this->is_registered;
    }

    public function fullName(): ?string
    {
        return $this->full_name;
    }

    public function fatherHusbandName(): ?string
    {
        return $this->father_husband_name;
    }

    public function dateOfBirth(): ?string
    {
        return $this->date_of_birth;
    }

    public function gender(): ?string
    {
        return $this->gender;
    }

    public function maritalStatus(): ?string
    {
        return $this->marital_status;
    }

    public function cnic(): ?string
    {
        return $this->c_n_i_c;
    }

    public function passportNo(): ?string
    {
        return $this->passport_no;
    }

    public function religion(): ?string
    {
        return $this->religion;
    }

    public function nationality(): ?string
    {
        return $this->nationality;
    }

    public function blood_group(): ?string
    {
        return $this->blood_group;
    }

    public function preferredLearningMethod(): ?string
    {
        return $this->preferred_learning_method;
    }

    public function residentialAddress(): ?string
    {
        return $this->residential_address;
    }

    public function postalCode(): ?string
    {
        return $this->postal_code;
    }

    public function city(): ?string
    {
        return $this->city;
    }

    public function country(): ?string
    {
        return $this->country;
    }

    public function telephone(): ?string
    {
        return $this->telephone;
    }

    public function code(): ?string
    {
        return $this->code;
    }

    public function phone(): ?string
    {
        return $this->phone;
    }

    public function personalEmail(): ?string
    {
        return $this->personal_email;
    }

    public function educationalQualification(): ?string
    {
        return $this->educational_qualification;
    }

    public function employmentStatus(): ?string
    {
        return $this->employment_status;
    }

    public function businessTypeDesignation(): ?string
    {
        return $this->business_type_designation;
    }

    public function businessName(): ?string
    {
        return $this->business_name;
    }

    public function officialAddress(): ?string
    {
        return $this->official_address;
    }

    public function officialTelephone(): ?string
    {
        return $this->official_telephone;
    }

    public function institutionalEmail(): ?string
    {
        return $this->institutional_email;
    }

    public function activityType(): ?string
    {
        return $this->activity_type;
    }

    public function activityTitle(): ?string
    {
        return $this->activity_title;
    }

    public function isPaid(): ?bool
    {
        return $this->is_paid;
    }

    public function courseFee(): ?string
    {
        return $this->course_fee;
    }

    public function courseTax(): ?string
    {
        return $this->course_tax;
    }

    public function sponsorName(): ?string
    {
        return $this->sponsor_name;
    }

    public function contactPerson(): ?string
    {
        return $this->contact_person;
    }

    public function sponsorMobile(): ?string
    {
        return $this->sponsor_mobile;
    }

    public function sponsorEmail(): ?string
    {
        return $this->sponsor_email;
    }

    public function sponsorAddress(): ?string
    {
        return $this->sponsor_address;
    }

    public function certificateNominalFee(): ?string
    {
        return $this->certificate_nominal_fee;
    }

    public function certificateCharge(): ?string
    {
        return $this->certificate_charge;
    }

    public function emergencyName(): ?string
    {
        return $this->emergency_name;
    }

    public function emergencyRelationship(): ?string
    {
        return $this->emergency_relationship;
    }

    public function emergencyMobileNo(): ?string
    {
        return $this->emergency_mobile_no;
    }

    public function file(): ?string
    {
        return $this->file;
    }

    public function class(): BelongsTo
    {
        return $this->belongsTo(CourseClass::class, 'class_id', 'id');
    }
}
