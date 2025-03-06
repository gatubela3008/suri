<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\AddressFactory> */
    use HasFactory;

    protected $guarded = [];

    public function canton () : BelongsTo
    {
        return $this->belongsTo(Canton::class);
    }

    public function user () : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
