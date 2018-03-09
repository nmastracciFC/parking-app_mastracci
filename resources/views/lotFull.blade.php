@extends('layouts.app')

@section('content')
<div class="phpContainer">
    <h1>SPOT | in php </h1>
        <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif
        <h4>Sorry, {{ Auth::user()->fname }}, that lot is full. </h4>
        <h4>Please <a href="/garages">choose another</a></h4>

        
        </div>
            
     
</div>
@endsection
