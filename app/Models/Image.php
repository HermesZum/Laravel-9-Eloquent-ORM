<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Image extends Model
{
    use HasFactory;

    /**
     * This image belongs to a model that is imageable.
     *
     * @return MorphTo An embracing polymorphic relationship.
     */
    public function imageable(): MorphTo
    {
        return $this->morphTo();
    }
}
