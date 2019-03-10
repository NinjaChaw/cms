<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    public $directory = "/images/";

    protected $fillable = ['title', 'content', 'path'];

    protected $table = 'post';


    public function user() {

        return $this->belongsTo('App\User', 'id');

    }

    public function photos() {

        return $this->morphMany('App\Photo', 'imageable');

    }

    public function getPathAttribute($value) {

        return $this->directory . $value;
    }


}
