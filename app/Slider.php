<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
        'image_url', 'slide_title', 'slide_subtitle'
    ];
}
