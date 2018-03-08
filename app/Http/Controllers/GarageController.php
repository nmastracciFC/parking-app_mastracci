<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Garage;
use App\Http\Resources\Garage as GarageResource;

class GarageController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function show(){
    	return new GarageResource(Garage::all());
    	// return new GarageResource(Garage::find($id));
    }
}
