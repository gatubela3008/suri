<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Canton;

class Province extends Model
{

    protected $guarded = [];
    /**
     * Relación con cantones (uno a muchos)
     */
    public function cantons() : HasMany
    {
        return $this->hasMany(Canton::class);
    }
    
}
