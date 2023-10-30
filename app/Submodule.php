<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submodule extends Model
{
    protected $fillable = ['name', 'description', 'route_url'];

    public function module()
    {
        return $this->belongsTo(Module::class, 'module_id');
    }
}
