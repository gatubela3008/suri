<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Capacitation extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\CapacitationFactory> */
    use HasFactory;

    public function users() : BelongsToMany
    {
        return $this->belongsToMany(User::class)
            ->withPivot('scholarship')
            ->withTimestamps();
    }
}
