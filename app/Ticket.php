<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public function users() {
    	return $this->belongsTo(User::class, 'id' , 'user_id');
    }
    public function garages() {
    	return $this->belongsTo(Garage::class, 'garage_id', 'id');
    }
}
