<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $guarded = [];
    public function books(){
        return $this->hasMany('App\Book');
    }
}
