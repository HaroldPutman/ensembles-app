<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Contact extends Model
{
    use HasFactory;
    use HasUlids;

    protected $fillable = [
        'lastname',
        'firstname',
        'email',
        'phone',
        'address',
        'city',
        'state',
        'zip'
    ];

    public function students(): BelongsToMany
    {
        return $this->belongsToMany(Student::class);
    }
}
