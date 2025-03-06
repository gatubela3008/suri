<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

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

    public function schedules() : HasManyThrough
    {
        return $this->hasManyThrough(Schedule::class, Group::class);
    }

    public function professor() : HasOneThrough
    {
        return $this->hasOneThrough(Professor::class, Group::class);
    }

    public function students() : HasManyThrough
    {
        return $this->hasManyThrough(Student::class, Group::class);
    }

}
