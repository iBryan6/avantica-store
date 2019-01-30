<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //defining table name
    public $table = 'category';

    //Database Relations
    public function type(){
        return $this->hasMany('App\Type','type');
    }
    

}
