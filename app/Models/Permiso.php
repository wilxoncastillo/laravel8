<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    use HasFactory;

    // relacion n:n
    public function rles() { 
        return $this->belongsToMany('App\Models\Role');
    }

    
}
