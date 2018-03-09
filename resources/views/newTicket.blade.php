@extends('layouts.app')

@section('content')
<div class="phpContainer">
    <h1>SPOT | in php </h1>
        <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif
        <h4>You did it, {{ Auth::user()->fname }}. Here is your ticket.</h4>
        <h4>Please enter the garage</h4>

        <div>
          
                
                <h4>Entry Time: {{$newTicketRow->created_at}}</h4>
                <a href="/garages/park/{{$newTicketRow->id}}">LEAVE GARAGE</a>
                
           
        </div>

    
        </div>
            
     
</div>
@endsection
