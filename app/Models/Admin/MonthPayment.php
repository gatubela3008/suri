<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MonthPayment extends Model
{
    protected $guarded = [];

    public function inscription () : BelongsTo
    {
        return $this->belongsTo(Inscription::class);
    }

}
