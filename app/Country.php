<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //

    public function posts(){
        // we have to tell the first parameter, we want, and after the intermediate
        return $this->hasManyThrough('App\Post','App\User');
        //if we have different names for ids
        //return $this->hasManyThrough('App\Post','App\User','country_id','user_id');
    }
}
