<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // relacion n:n
    public function user() { 
        return $this->belongsToMany('App\Models\User');
    }

    // relacion n:n
    public function permisos() { 
        return $this->belongsToMany('App\Models\Permiso');
    }
}
