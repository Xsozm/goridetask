<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //works tested
    public function agencies(){
        return $this->hasMany('App\Agency','company_id','id');
    }

    public function boss(){
        return $this->belongsTo('App\User','manager','id');
    }
}
