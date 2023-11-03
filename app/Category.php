<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];
    public function blogPosts()
    {
        return $this->hasMany(BlogPost::class);
    }
}
