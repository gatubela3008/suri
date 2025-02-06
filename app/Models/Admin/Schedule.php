<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Schedule extends Model
{
    protected $guarded = [];
    
    public function groups() : BelongsToMany
    { 
        return $this->belongsToMany(Group::class) 
            ->withPivot('start_date', 'edition') 
            ->withTimestamps(); 
    }

    public function inscriptions () : HasManyThrough
    {
        return $this->hasManyThrough(Inscription::class, Group::class);
    }

    public function capacitations () : HasManyThrough
    {
        return $this->hasManyThrough(Capacitation::class, Group::class);
    }
    
}
