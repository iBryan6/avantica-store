<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userType extends Model
{
    public function users(){
        return $this->belongsToMany('App\User','role_user');
    }
}
