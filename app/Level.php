<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    //tiene varios usuarios
    public function users(){
        return $this->hasMany(User::class);
    }
}
