<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //un post pertenece a un usuario
    public function user(){
        return $this->belongsTo(User::class);
    }

    //un post pertenece a una categoria
    public function category(){
        return $this->belongsTo(Category::class);
    }

    //un post tiene muchos comentarios
    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }

    //un post tiene una imagen
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }

    //un post tiene muchos tags
    public function tags(){
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
