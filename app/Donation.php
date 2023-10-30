<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $guarded = [];

    public function cause()
    {
        return $this->belongsTo(Cause::class);
    }
}
