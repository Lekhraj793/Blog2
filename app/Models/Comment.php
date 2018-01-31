<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable=['post_id', 'comments'];

    public function Comment()
    {
        return $this->belongsTo(Post::class);
    }
}
