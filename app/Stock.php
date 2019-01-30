<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
     //defining table name
     public $table = 'stock';

    //Database Relations
    public function product(){
        return $this->belongsTo('App\Product');
    }
}
