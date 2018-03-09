<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Garage;
use App\User;
use App\Car;
use App\Ticket;
use App\Rate;
use Auth;
use Carbon;
use DB;

class ParkingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $garages = Garage::all();
        return view('garages', compact('garages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //when a user enters the garage save their user_id, garage_id, set 'has_paid' to false and then increment the garage's available spaces by one

        $userId = Auth::user()->id;
        $garageId = request('garage_id');
        // dd($garageId);
       

        $userTicket = Ticket::create([
            'user_id' => $userId,
            'garage_id' => $garageId,
            'has_paid' => false

        ]);

        // $incrementGarage = Garage::where('id', $garageId)->upodate(array('occupied_spaces' =>))
        $incrementGarage = DB::table('garages')->whereId($garageId)->increment('occupied_spaces');
        $userTicket->save();
        // dd($userTicket, $incrementGarage);
        return view('success', compact('schedules'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //When a user leaves subtract their ticket's 'created_at' time from current time ask for their payment information. On payment update 'has_paid' on ticket to true and allow the user to leave
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //When a user leaves subtract their ticket's 'created_at' time from current time ask for their payment information, 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
