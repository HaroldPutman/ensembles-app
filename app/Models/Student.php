<?php

namespace App\Models;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Student extends Model
{
    use HasFactory;
    use HasUlids;

    protected $dates = ['birthdate'];
    protected $fillable = ['firstname', 'lastname', 'birthdate', 'note'];

    /**
     * The roles that belong to the user.
     */
    public function contacts(): BelongsToMany
    {
        return $this->belongsToMany(Contact::class);
    }

    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class, 'registrations')->withTimestamps()->withPivot('payment');
    }

    public function getAgeAttribute(): int
    {
        return $this->birthdate->age;
    }
}
