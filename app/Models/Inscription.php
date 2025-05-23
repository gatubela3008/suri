<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Inscription extends Model
{
    protected $guarded = [];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function group () : BelongsTo
    {
        return $this->belongsTo(Group::class);
    }

    public function student () : BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

}
