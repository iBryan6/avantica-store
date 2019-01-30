<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    //Database Relations
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function invoice(){
        return $this->hasMany('App\Invoice');
    }
    public function orderItems(){
        return $this->hasMany('App\OrderItem');
    }   
}
