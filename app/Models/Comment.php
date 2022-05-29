<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'title',
        'body',
        'author_name',
        ];

        public function commentable(): MorphTo
{
return $this->morphTo();
}
}
