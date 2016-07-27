<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    //inverse relationship
    public function users(){
        return $this->belongsToMany('App\User');
    }
}
