<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Capacitation extends Model
{
    protected $guarded = [];

    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function schedules() : BelongsToMany
    { 
        return $this->belongsToMany(Schedule::class) 
            ->withPivot('start_date', 'edition') 
            ->withTimestamps(); 
    }

    public function inscriptions() : HasMany
    {
        return $this->hasMany(Inscription::class);
    }

    public function users() : HasManyThrough
    {
        return $this->hasManyThrough(User::class, Inscription::class);
    }

}
