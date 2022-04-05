<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Level extends Model
{
    use HasFactory;

    /**
     * This function returns a HasMany relationship
     *
     * @return HasMany HasMany object.
     */
    function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
