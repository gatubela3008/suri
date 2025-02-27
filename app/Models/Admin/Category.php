<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\CategoryFactory> */
    use HasFactory;

    protected $guarded = [];

    public function capacitations() : HasMany
    {
        return $this->hasMany(Capacitation::class);
    }

}
