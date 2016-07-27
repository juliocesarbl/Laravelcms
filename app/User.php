<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function post(){
        return $this->hasOne('App\Post');//by default look for user_id
        //if you have another id name
        //return $this->hasone('App\Post','the_user_id');
    }

    public function posts(){
         return $this->hasMany('App\Post');
    }

    public function roles()
    {

        return $this->belongsToMany('App\Role')->withPivot('created_at');
        //usando os padrões, não preicisa da configuração abaixo. Mas para customizar nomes de tabelas e as FKs use o comando abaixo
        //return $this->belongsToMany('App\Role','user_roles','user_id','role_id');
    }

    public function photos(){
        return $this->morphMany('App\Photo','imageable');
    }
}
