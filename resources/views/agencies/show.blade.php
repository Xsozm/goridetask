@extends('layouts.app')
@section('content')

    <div class="bg-white p-4 container">
        <h2>Agency Cars :</h2>

        <style>

            .cars{
                border-radius: 50px;
            }
        </style>




            <ul>
            <div class="cars shadow-sm" style="border-radius: 50px" >
                @foreach($agency->cars as $car)
                <a href="{{ ('/car/'.$car->id) }}"><li><h1>{{$car->name}}</h1></li></a>

                <span class="d-flex justify-content-center align-items-center p-1">
                <h5>{{$agency->description}}</h5>
                    @endforeach

            </span>
            </div>
            </ul>


    </div>




@endsection