<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //defining the table name
    public $table = 'type';

    //DB relations
    public function product(){
        return $this->hasMany('App\Product');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }
}
