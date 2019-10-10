<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    //transformar a
    public function imageable(){
        return $this->morphTo();
    }

}
