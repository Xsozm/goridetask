@extends('layouts.app')
@section('content')

    <div class="bg-white p-4 container">
        <h2> Cars :</h2>

        <style>

            .cars{
                border-radius: 50px;
            }
        </style>




        <ul>
            @foreach($cars as $car)
            <div class="cars shadow-sm" style="border-radius: 50px" >

                    <a href="{{ ('/car/'.$car->id) }}"><li><h1>{{$car->name}}</h1></li></a>
                <h4>Model:{{$car->model}}</h4>
                <h4>agency:{{$car->agency->name}}</h4>


                <span class="d-flex justify-content-center align-items-center p-1">
                <h5>about the car :{{$car->description}}</h5>


            </span>
            </div>
            @endforeach
        </ul>


    </div>




@endsection