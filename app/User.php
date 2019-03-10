<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    protected $primaryKey = 'id';
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

public function post() {

    return $this->hasOne('App\Post', 'id');

}

public function posts () {

    return $this->hasMany('App\Post');
}

public function roles() {

    return $this->belongsToMany('App\Role');

}

public function photos() {

    return $this->morphMany('App\Photo', 'imageable');

}

public function getNameAttribute($value) {

    return strtoupper($value);
}

public function setNameAttribute($value)
{

    return $this->attributes['name'] = strtoupper($value);

}

}