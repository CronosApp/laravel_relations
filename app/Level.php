<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    //tiene varios usuarios
    public function users(){
        return $this->hasMany(User::class);
    }

    //acceder a los posts atravez de usuarios
    public function posts(){
        return $this->hasManyThrough(Post::class,User::class);
    }

    //acceder a los videos atravez de usuarios
    public function videos(){
        return $this->hasManyThrough(Video::class,User::class);
    }
}
