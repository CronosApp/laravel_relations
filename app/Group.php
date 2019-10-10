<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //un grupo puede tener muchos usuarios
    public function users(){
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
