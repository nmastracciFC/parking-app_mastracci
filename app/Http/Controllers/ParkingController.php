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
        $garageRow = Garage::whereId($garageId)->first();
        $garageAvailable = $garageRow->total_spaces - $garageRow->occupied_spaces;
        // dd($garageId, $garageAvailable);
       
        if($garageAvailable > 0) {
             $userTicket = Ticket::create([
                'user_id' => $userId,
                'garage_id' => $garageId,
                'has_paid' => false
                ]);
            $userTicket->save();
            $incrementGarage = DB::table('garages')->whereId($garageId)->increment('occupied_spaces');
            $newTicketId = $userTicket->id;
            $newTicketRow = Ticket::whereId($newTicketId)->first();

                 // dd($newTicketRow);
       
                // dd($userTicket, $incrementGarage);
        return view('newTicket', compact('newTicketRow'));
        } else {
            return view('lotFull');
        }

       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //When a user leaves subtract their ticket's 'created_at' time from current time ask for their payment information and display the total for them
        // dd($id);
        // return "working";
        $userId = Auth::user()->id;
        $ticketId = $id;
        $ticketRow = Ticket::whereId($ticketId)->first();
        $ticketCreated = $ticketRow->created_at->timestamp;

        $currentTime = Carbon\Carbon::now()->timestamp;
        $ticketDuration = $currentTime - $ticketCreated;
        // dd($ticketDuration);

        $oneHour = Rate::find(1);
        $threeHours = Rate::find(2);
        $sixHours = Rate::find(3);
        $allDay = Rate::find(4);
        // dd($oneHour, $threeHours, $sixHours, $allDay);

        if($ticketDuration <= $oneHour->duration){
            $paymentMessage = "you owe $".$oneHour->price/100;
            return view('payment', compact('paymentMessage'));
        }else if($ticketDuration <= $threeHours->duration){
            $paymentMessage = "you owe $".$threeHours->price/100;
            return view('payment', compact('paymentMessage'));
        }else if($ticketDuration <= $sixHours->duration){
            $paymentMessage = "you owe $".$sixHours->price/100;
            return view('payment', compact('paymentMessage')); 
        }else if ($ticketDuration > $sixHours->duration){
            $paymentMessage = "you owe $".$allDay->price/100;
            return view('payment', compact('paymentMessage'));
        }
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
        //change "has_paid" to true and take away one from the garage's 'occupied_spaces'
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
