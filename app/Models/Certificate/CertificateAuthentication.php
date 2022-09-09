<?php

namespace App\Models\Certificate;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Logixs\Modules\Site\Enrollment\Models\Enrollment;

/**
 * @property int $id
 * @property int $enrollment_id
 * @property int $course_id
 * @property string $name
 * @property Carbon $issue_date
 * @property string $certificate
 */
class CertificateAuthentication extends Model
{
    protected $table = 'certificates';
    protected $dateFormat = 'Y-m-d H:i:s';

    public function id(): int
    {
        return $this->id;
    }

    public function enrollmentId(): int
    {
        return $this->enrollment_id;
    }

    public function courseId(): int
    {
        return $this->course_id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function verifyCertificate(): string
    {
        return $this->certificate;
    }

    public function issueDate(): Carbon
    {
        return Carbon::parse($this->issue_date);
    }

    public function enrollment(): BelongsTo
    {
        return $this->belongsTo(Enrollment::class, 'enrollment_id', 'id');
    }
}
