<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Group extends Model
{
    protected $guarded = [];

    public function capacitation(): BelongsTo
    {
        return $this->belongsTo(Capacitation::class);
    }

    public function inscriptions(): BelongsTo
    {
        return $this->belongsTo(Inscription::class);
    }

    public function schedules(): BelongsToMany
    {
        return $this->belongsToMany(Schedule::class)
            ->withPivot('start_date', 'edition')
            ->withTimestamps();
    }

    public function users() : HasManyThrough
    {
        return $this->hasManyThrough(User::class, Inscription::class);
    }
}
