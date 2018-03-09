@extends('layouts.app')

@section('content')
<div class="phpContainer">
    <h1>SPOT | in php </h1>
        <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif
        <h4>{{ Auth::user()->fname }}, Choose a Garage</h4>
        <form action="/php/garage" method="post" >
        @foreach($garages as $garage)
        <div>
            <h3>{{$garage->garage_name}}</h3>
            <h4>{{$garage->total_spaces - $garage->occupied_space}}</h4>
            <button type="submit" name="garage_id" value="{{$garage->id}}">PARK HERE</button>
        </div>
        @endforeach
        </form>
        </div>
            
     
</div>
@endsection
