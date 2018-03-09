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
            <form action="/garages/park/payment" method="post" >
                <input type="hidden" name="_method" value="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <h4>Entry Time: {{$newTicketRow->created_at}}</h4>
                <button type="submit" name="ticket_id" value="{{$newTicketRow->id}}">PAY TICKET AND EXIT</button>
            </form>
        </div>

        <ul>
            <li><a href="/garages">View Garages</a></li>
        </ul>
        </div>
            
     
</div>
@endsection
