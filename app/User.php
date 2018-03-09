<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname', 'lname', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'payment_type', 'payment_number', 'payment_expiry'
        
    ];

    public function tickets() {
        return $this->hasMany(Ticket::class , 'id', 'user_id');
    }
    public function cars() {
        return $this->hasMany(Car::class, 'id', 'user_id');
    }
}
