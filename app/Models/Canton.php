<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Canton extends Model
{
    protected $guard = [];

    /**
     * Relación con provincia (uno a muchos inversa)
     */
    public function province() : BelongsTo
    {
        return $this->belongsTo(Province::class);
    }

    public function addresses() : HasMany
    {
        return $this->hasMany(Address::class);
    }
    
}
