<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // relacion 1:n inversa
    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function categoria() {
        return $this->belongsTo('App\Models\Categoria');
    }

    //relacion 1:n polimorfica
    public function coments() { 
        return $this->morphMany('App\Models\Coment', 'comementable');
    }

    //Relacion 1:1 polimorfica
    public function image(){
        return $this->morphOne('App\Models\Image', 'imageable');
    }

    // relacion n:n polimorfica
    public function posts() {
        return $this->morphToMany('App\Models\Tag', 'taggable');
    }

}
