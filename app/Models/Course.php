<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Course extends Model
{
    use HasFactory;
    protected $casts = [
        'start' => 'datetime'
    ];

    public function students(): BelongsToMany
    {
        return $this->belongsToMany(Student::class, 'registrations')->withTimestamps()->withPivot('payment');
    }

    /**
     * Get the age limits for the course as a string.
     * - max_age = 99 means adult.
     * - null min_age means no lower limit.
     * - null max_age means no upper limit.
     * @return string 'All ages' | 'Ages 5 to 10' | 'Up to age 5' | 'Ages 14 to adult'
     */
    public function getAgeRangeAttribute(): string
    {
        if (!$this->age_min && (!$this->age_max || $this->age_max >= 99)) {
            return 'All ages';
        }
        $maxAge = $this->age_max >= 99 ? 'adult' : $this->age_max;
        if ($this->age_min) {
            return 'Ages ' . $this->age_min . ($maxAge ? (' to ' . $maxAge) : ' and up');

        }
        return 'Up to age ' . $this->age_max;
    }
}
