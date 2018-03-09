<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function users() {
    	return $this->belongsTo(User::class, 'id', 'user_id');
    }
}
