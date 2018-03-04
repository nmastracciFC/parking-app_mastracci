<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Garage;
use App\Http\Resources\Garage as GarageResource;

class GarageController extends Controller
{
    public function show($id){
    	return new GarageResource(Garage::find($id));
    }
}
