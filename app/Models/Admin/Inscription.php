<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Inscription extends Model
{
    protected $guarded = [];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function capacitation () : BelongsTo
    {
        return $this->belongsTo(Capacitation::class);
    }

    public function schedule () : BelongsTo
    {
        return $this->belongsTo(Schedule::class);
    }

    public function registrationPayment () : HasMany
    {
        return $this->hasMany(RegistrationPayment::class);
    }

    public function monthPayment () : HasMany
    {
        return $this->hasMany(MonthPayment::class);
    }

}
