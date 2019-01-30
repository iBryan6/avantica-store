<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{

    //Database Relations
    public function product(){
        return $this->belongsTo('App\Product');
    }
}
