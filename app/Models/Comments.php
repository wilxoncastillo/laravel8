<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    public function comentable() {
        return $this->morphTo();
    }


    //Relacion 1:n inversa
    public function user() {
        return $this->belongsTo('App\Models\User');
    }


}
