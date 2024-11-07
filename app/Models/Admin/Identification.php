<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Identification extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\IdentificationFactory> */
    use HasFactory;

    protected $guarded = [];

    public function id_types () : BelongsTo
    {
        return $this->belongsTo(IdType::class);
    }

    public function user () : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
