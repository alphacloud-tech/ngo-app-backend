<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CauseCategory extends Model
{

    protected $guarded = [];
    
    public function causes()
    {
        return $this->hasMany(Cause::class);
    }

}
