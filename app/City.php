<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{

    //Database Relations
    public function users(){
        return $this->hasMany('App\User');
    }
}
