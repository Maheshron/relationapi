<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    //
    protected $guarded = [];
    public function districts(){
        return $this->hasMany('App\District');
    }
    public function villages(){
        return $this->hasMany('App\Village');
    }

}
