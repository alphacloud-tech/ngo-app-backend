<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cause extends Model
{

    // protected $guarded = [];
    protected $fillable = [
        'title', 'cause_category_id', 'target_amount',
        'image_url', 'description', 'raised_amount', 'featured'
    ];


    public function donations()
    {
        return $this->hasMany(Donation::class);
    }


    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }

    public function causeCategory()
    {
        return $this->belongsTo(CauseCategory::class);
    }
}
