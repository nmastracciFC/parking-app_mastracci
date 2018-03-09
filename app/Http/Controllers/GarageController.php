<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Garage;
use App\Http\Resources\Garage as GarageResource;
use App\Http\Resources\GarageCollection; 


class GarageController extends Controller
{
	 public function __construct()
    {
        // $this->middleware('auth:api');
    }

    public function index() {
        GarageResource::withoutWrapping();
    	$garage = Garage::all();

    	return new GarageCollection($garage);





    	// dd(Garage::find('id'));
    	// GarageResource::withoutWrapping();
    	// return new GarageResource(Garage::get('garage_name', 'hello'));
    }
    public function show($id){
    	GarageResource::withoutWrapping();

    	// return new GarageResource($garage);

    	// return new GarageResource(Garage::all());
    	return new GarageResource(Garage::find($id));
    }
}
