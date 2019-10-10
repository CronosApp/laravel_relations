<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //un etiqueta tiene muchos posts
    public function posts(){
        return $this->morphedByMany(Post::class, 'taggable');
    }

    //un etiqueta tiene muchos videos
    public function videos(){
        return $this->morphedByMany(Video::class, 'taggable');
    }
}
