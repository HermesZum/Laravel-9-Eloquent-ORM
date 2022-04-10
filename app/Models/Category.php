<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    /**
     * A user has many posts.
     *
     * @return HasMany A collection of Post models.
     */
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    /**
     * A user has many videos.
     *
     * @return HasMany A collection of videos
     */
    public function videos(): HasMany
    {
        return $this->hasMany(Video::class);
    }
}
