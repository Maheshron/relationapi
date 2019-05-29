<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    //
    protected $guarded = [];

    public function villages(){
        return $this->hasMany('App\Village');
    }
    public function districts(){
        return $this->belongsTo('App\State');
    }
}
