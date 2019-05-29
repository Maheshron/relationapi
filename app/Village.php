<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    //
protected $guarded = [];
   
public function state(){
    return $this->belongsTo('App\State');
}
    public function districts(){
        return $this->belongsTo('App\District');
    }
    

}
