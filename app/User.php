<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    public function roles(){
        return $this->belongsTo('App\UserType');
    }

    public function city(){
        return $this->belongsTo('App\City');
    }

    public function order(){
        return $this->hasMany('App\Order');
    }

    public function invoice(){
        return $this->hasMany('App\Invoice');
    }




    public function authorizeRoles($roles){
        if ($this->id_user_type==$roles) {
            return true;
        }
        abort(401,'This action is unauthorized');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'phone_number', 'name', 'last_name', 'address',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'status',
    ];
}