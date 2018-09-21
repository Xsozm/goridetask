<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    //works tested
    public function company(){
        return $this->belongsTo('App\Company','company_id','id');
    }

    //works tested
    public function cars(){
        return $this->hasMany('App\Car','agency_id','id');
    }
}
