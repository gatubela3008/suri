<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Schedule extends Model
{
    protected $guarded = [];
    
    public function capacitations() : BelongsToMany
    { 
        return $this->belongsToMany(Capacitation::class) 
            ->withPivot('start_date', 'edition_name') 
            ->withTimestamps(); 
    }

    public function inscription () : HasMany
    {
        return $this->hasMany(Inscription::class);
    }

    public function users() : HasManyThrough
    {
        return $this->hasManyThrough(User::class, Schedule::class);
    }
    
}
