<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Group extends Model
{
    use HasFactory;

    public function lessons(): BelongsToMany
    {
        return $this->belongsToMany(Lesson::class, 'group_lessons');
    }
}
