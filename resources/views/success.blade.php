@extends('layouts.app')

@section('content')
<div class="phpContainer">
    <h1>SPOT | in php </h1>
        <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif
        <h4>You did it, {{ Auth::user()->fname }}. You Now have a ticket.</h4>
        <h4>please enter the garage</h4>
        <ul>
            <li><a href="/garages">View Garages</a></li>
        </ul>
        </div>
            
     
</div>
@endsection
