<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class IdType extends Model
{
    protected $guarded = [];
    
    public function identifications() : HasMany
    {
        return $this->hasMany(Identification::class);
    }
    
}
