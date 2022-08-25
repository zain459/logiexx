<?php

namespace App\Models\Certificate;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Logixs\Modules\Course\Models\CourseClass;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $class_id
 * @property string $name
 * @property Carbon $issue_date
 * @property string $verify_certificate
 */
class CertificateAuthentication extends Model
{
    protected $table = 'certificates';
    protected $dateFormat = 'Y-m-d H:i:s';

    public function id(): int
    {
        return $this->id;
    }

    public function classId(): int
    {
        return $this->class_id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function verifyCertificate(): string
    {
        return $this->verify_certificate;
    }

    public function issueDate(): Carbon
    {
        return Carbon::parse($this->issue_date);
    }

//    public function class(): BelongsTo
//    {
//        return $this->belongsTo(CourseClass::class, 'class_id', 'id');
//    }
}
