<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Group extends Model
{
    protected $guarded = [];

    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }

    public function inscriptions(): HasMany
    {
        return $this->hasMany(Inscription::class);
    }

    public function schedules(): BelongsToMany
    {
        return $this->belongsToMany(Schedule::class)
            ->withPivot('start_date', 'edition')
            ->withTimestamps();
    }    
    
}
