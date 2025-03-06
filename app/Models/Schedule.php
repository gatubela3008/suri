<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Schedule extends Model
{
    protected $guarded = [];
    
    public function groups() : BelongsToMany
    { 
        return $this->belongsToMany(Group::class) 
            ->withTimestamps(); 
    }    
}
