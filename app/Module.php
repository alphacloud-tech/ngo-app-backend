<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable = ['name', 'description'];

    public function submodules()
    {
        return $this->hasMany(Submodule::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'assignments', 'module_id', 'user_id')
            ->withPivot('submodule_id');
    }
}
