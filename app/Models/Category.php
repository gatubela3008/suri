<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\CategoryFactory> */
    use HasFactory;

    protected $guarded = [];

    public function capacitations() : HasMany
    {
        return $this->hasMany(Capacitation::class);
    }

    public function subjects() : HasManyThrough
    {
        return $this->hasManyThrough(Subject::class, Capacitation::class);
    }

}
