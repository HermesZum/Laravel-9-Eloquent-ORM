<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Comment extends Model
{
    use HasFactory;

    /**
     * This comment belongs to a commentable model.
     *
     * @return MorphTo A polymorphic relationship.
     */
    public function commentable(): MorphTo
    {
        return $this->morphTo();
    }

    /**
     * This post belongs to a user.
     *
     * @return BelongsTo A relationship between the user and the question.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
