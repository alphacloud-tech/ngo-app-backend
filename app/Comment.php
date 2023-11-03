<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];

    public function blogPost()
    {
        return $this->belongsTo(BlogPost::class);
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
}
