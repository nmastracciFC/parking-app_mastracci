<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rate;
use App\Http\Resources\Rate as RateResource;

class RateController extends Controller
{
    public function show($id){
    	return new RateResource(Rate::find($id));
    }
}
