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
}