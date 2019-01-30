<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    //Database Relations
    public function orderItems(){
        return $this->hasMany('App\OrderItem');
    }

    public function productOptions(){
        return $this->hasMany('App\ProductOption');
    }

    public function stock(){
        return $this->hasMany('App\Stock');
    }

    public function productImages(){
        return $this->hasMany('App\ProductImage');
    }

    public function type(){
        return $this->belongsTo('App\Type','type');
    }

    public function brand(){
        return $this->belongsTo('App\Brand');
    }
    //End of relations
}
