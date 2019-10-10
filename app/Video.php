<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{

    //un video pertenece a un usuario
    public function user(){
        return $this->belongsTo(User::class);
    }

    //un video pertenece a una categoria
    public function category(){
        return $this->belongsTo(Category::class);
    }

    //un video tiene muchos comentarios
    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }

    //un video tiene una imagen
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }

    //un video tiene muchos tags
    public function tags(){
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
