<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //defining table name
    public $table = 'brand';

    //Database Relations
    public function product(){
        return $this->hasMany('App\Product');
    }
}
