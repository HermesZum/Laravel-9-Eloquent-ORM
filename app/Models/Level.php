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

    /**
     * Get all the posts that belong to the users that belong to this role.
     *
     * @return HasManyTrough A collection of posts that belong to the user.
     */
    public function postsWithUser()
    {
        return $this->hasManyTrough(Post::class, User::class, 'user_id', 'id');
    }

    /**
     * Get all the videos that belong to the users that belong to this role.
     *
     * @return HasManyTrough A collection of posts that belong to the user.
     */
    public function videosWithUser()
    {
        return $this->hasManyTrough(Video::class, User::class, 'user_id', 'id');
    }
}
