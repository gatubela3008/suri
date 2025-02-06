<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

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

    public function group () : HasMany
    {
        return $this->hasMany(Group::class);
    }
    
    public function users () : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function capactation() : HasOneThrough
    {
        return $this->hasOneThrough(Capacitation::class, Group::class);
    }

    public function schedule() : HasManyThrough
    {
        return $this->hasManyThrough(Schedule::class, Group::class);
    }
}
