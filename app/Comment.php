<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //transformar a
    public function commentable(){
        return $this->morphTo();
    }

    //un comentario pertenece a un usuario
    public function user(){
        return $this->belongsTo(User::class);
    }
}
