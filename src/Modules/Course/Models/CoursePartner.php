<?php

namespace Logixs\Modules\Course\Models;

use Illuminate\Database\Eloquent\Model;
use Logixs\Modules\Partner\Models\Partner;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $partner_id
 * @property int $course_id
 */
class CoursePartner extends Model
{
    protected $table = 'course_partners';
    protected $dateFormat = 'Y-m-d H:i:s';

    public function id(): int
    {
        return $this->id;
    }

    public function partnerId(): int
    {
        return $this->partner_id;
    }

    public function courseId(): int
    {
        return $this->course_id;
    }

    public function partner(): BelongsTo
    {
        return $this->belongsTo(Partner::class, 'partner_id');
    }
}
