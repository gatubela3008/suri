<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Student extends Model
{
    protected $guarded = [];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function groups() : BelongsToMany
    {
        return $this->belongsToMany(Group::class)
            ->withTimestamps();
    }
    
    public function schedules() : HasManyThrough
    {
        return $this->hasManyThrough(Schedule::class, Group::class);
    }
    
}
