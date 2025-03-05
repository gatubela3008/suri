<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Group extends Model
{
    protected $guarded = [];

    public function subject() : BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }

    public function capacitation() : HasOneThrough
    {
        return $this->hasOneThrough(Capacitation::class, Subject::class);
    }

    public function professor() : BelongsTo
    {
        return $this->belongsTo(Professor::class);
    }

    public function professorUser() : HasOneThrough
    {
        return $this->hasOneThrough(User::class, Professor::class);
    }

    public function students() : BelongsToMany 
    {
        return $this->belongsToMany(Student::class)
            ->withTimestamps();
    }

    public function studentsUsers() : HasManyThrough
    {
        return $this->hasManyThrough(User::class, Student::class);
    }

    public function schedules() :BelongsToMany
    {
        return $this->belongsToMany(Schedule::class)
            ->withTimestamps();
    }
    
}
