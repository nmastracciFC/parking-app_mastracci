@extends('layouts.app')

@section('content')
<div class="phpContainer">
    <h1>SPOT | in php </h1>
        <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif
        <h4>{{ Auth::user()->fname }} You are logged in!</h4>
        <h4>What Would You Like to Do?</h4>
        <ul>
            <li><a href="/php/garages">View Garages</a></li>
        </ul>
        </div>
            
     
</div>
@endsection
