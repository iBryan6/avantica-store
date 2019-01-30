<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OptionGroup extends Model
{

    //Database Relations
    public function option(){
        return $this->hasMany('App\Option');
    }
}
