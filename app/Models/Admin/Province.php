<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Admin\Canton;

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
