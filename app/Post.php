<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    //
    //se tivesse tavela com nome diferente de posts teria que usar comando a baixo
    //protected $table = 'nometablea'


    //definir o nome do primary key, caso seja diferente de id
    //protected $primaryKey = 'id';


    protected $dates = ['deleted_at'];



    //permite preencher via create
    protected $fillable = [

        'title',
        'content'
    ];

//inverse relationship
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function photos(){
        return $this->morphMany('App\Photo','imageable');
    }

    public function tags(){
        return $this->morphToMany('App\Tag','taggable');
    }


}
