<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Tag extends Model
{
    use HasFactory;

    /**
     * This tag can be applied to post.
     *
     * @return MorphToMany A collection of posts that have been tagged with this tag.
     */
    public function posts(): MorphToMany
    {
        return $this->morphedByMany(Post::class, 'taggable');
    }

    /**
     * This tag can be applied to video.
     *
     * @return MorphToMany A collection of all the videos that have been tagged with this tag.
     */
    public function videos(): MorphToMany
    {
        return $this->morphedByMany(Post::class, 'taggable');
    }
}
