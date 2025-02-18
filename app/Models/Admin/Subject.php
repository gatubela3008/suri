<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Subject extends Model
{
    protected $guarded = [];

    public function capacitation() : BelongsTo
    {
        return $this->belongsTo(Capacitation::class);
    }

    public function groups() : HasMany
    {
        return $this->hasMany(Group::class);
    }

    public function inscriptions() : HasManyThrough
    {
        return $this->hasManyThrough(Inscription::class, Group::class);
    }

    public function schedules() : HasManyThrough
    {
        return $this->hasManyThrough(Schedule::class, Group::class);
    }

}
