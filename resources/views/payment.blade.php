@extends('layouts.app')

@section('content')
<div class="phpContainer">
    <h1>SPOT | in php </h1>
        <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif
        <h4>Thanks for your business, {{ Auth::user()->fname }}</h4>
        <h4>{{$paymentMessage}}</a></h4>
        <a href="/garages/park/paid">PAY NOW AND EXIT</a>

        
        </div>
            
     
</div>
@endsection
