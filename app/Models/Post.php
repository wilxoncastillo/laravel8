<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //relacion 1:n polimorfica
    public function coments() { 
        return $this->morphMany('App\Models\Coment', 'comementable');
    }
}
