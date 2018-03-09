@extends('layouts.app')

@section('content')
<div class="phpContainer">
    <h1>SPOT | in php </h1>
        <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif
        <h4>Thanks for your business, {{ Auth::user()->fname }}</h4>
        <h4>See You next time!</a></h4>
        <a href="/home">Go To Homepage</a>

        
        </div>
            
     
</div>
@endsection
