<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    //relacion 1:n polimorfica
    public function coments() { 
        return $this->morphMany('App\Models\Coment', 'comementable');
    }

    // relacion n:n polimorfica
    public function posts() {
        return $this->morphToMany('App\Models\Tag', 'taggable');
    }
}
