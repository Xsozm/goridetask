@extends('layouts.app')
@section('content')

<div class="bg-white p-4 container">
    <style>

        .agencyContainer{
            border-radius: 50px;
        }
        </style>
    @foreach($agencies as $agency)
        <div class="agencyContainer shadow-sm" style="border-radius: 50px" >
            <a style="text-align: center" href="{{ ('agency/'.$agency->id) }}"><h1>Agency Name: {{$agency->name}}</h1></a>
            <h4 style="text-align: center">Agency Location: {{$agency->location}}</h4>
            <span class="d-flex justify-content-center align-items-center p-1">
                <h6>Description : {{$agency->description}}</h6>
            </span>
        </div>
    @endforeach


</div>



@endsection