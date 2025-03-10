<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Capacitation extends Model
{
    protected $guarded = [];

    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function subjects() : HasMany
    {
        return $this->hasMany(Subject::class);
    }

    public function groups() : HasManyThrough
    {
        return $this->hasManyThrough(Group::class, Subject::class);
    }
    
}
