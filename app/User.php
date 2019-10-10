<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //tiene un perfil
    public function profile(){
        return $this->hasOne(Profile::class);
    }

    //pertenece a un nivel
    public function level(){
        return $this->belongsTo(Level::class);
    }

    //un usuario puede tener muchos grupos
    public function groups(){
        return $this->belongsToMany(Group::class)->withTimestamps();
    }

    //acceder a la localizacion atravez del perfil
    public function location(){
        return $this->hasOneThrough(Location::class,Profile::class);
    }

    //un usuario tiene muchos posts
    public function posts(){
        return $this->hasMany(Post::class);
    }

    //un usuario tiene muchos videos
    public function videos(){
        return $this->hasMany(Video::class);
    }

    //un usuario tiene muchos comentarios
    public function comments(){
        return $this->hasMany(Comment::class);
    }

    //tiene un perfil
    public function image(){
        return $this->morphOne(Image::class,'imageable');
    }
}
