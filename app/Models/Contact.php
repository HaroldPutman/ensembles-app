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

    /**
     * Formats the phone number before inserting into database.
     */
    public function setPhoneAttribute($phone)
    {
        $justTheNumber = preg_replace(['/[^0-9]*/','/^[10]*/'],'', $phone);
        $this->attributes['phone'] = substr_replace(substr_replace($justTheNumber, '-', 3, 0), '-', 7, 0);
    }
}
