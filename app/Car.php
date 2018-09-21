<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //works tested
    public function agency(){
        return $this->belongsTo('App\Agency','agency_id','id');
    }

    //works tested
    public function users(){
        return $this->belongsToMany('App\User','rent','car_id','user_id');
    }
}
