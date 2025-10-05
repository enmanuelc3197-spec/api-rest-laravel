<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //Relacion con la tabla
    protected $table = 'categories';

    //Relacion de uno a muchos
    public function articles(){
        return $this->hasMany('App\Models\Post');
    }
}
