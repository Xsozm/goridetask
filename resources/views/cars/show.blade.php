@extends('layouts.app')
@section('content')

    <div class="bg-white p-4 container">
        <h2> Car Details :</h2>

        <style>

            .cars{
                border-radius: 50px;
            }
            .button {
                background-color: #bbb;
                display: block;
                margin: 10px 0;
                padding: 10px;
                width: 100%;
            }
        </style>




        <ul>
            <div class="cars shadow-sm" style="border-radius: 50px" >
                    <li><h1>Car Name :{{$car->name}}</h1></li>
                    <li><h1>Car Model :{{$car->model}}</h1></li>
                    <li><h1>Car Agency :{{$car->agency->name}}</h1></li>
                    <li>
                        <h1>Car Renters </h1>
                        @if(count($car->users)==0)
                            <h2>Not Yet</h2>
                         @endif
                        @if(count($car->users)>0)
                        <ol>

                            @foreach($car->users as $user)
                                <li>{{$user->name}}</li>
                                @endforeach
                        </ol>
                            @endif
                    </li>




                <span class=" justify-content-center align-items-center p-1">
                <h5>
                    @if(Auth()->user()->role!='admin')
                    <form method="POST" action="{{ route('rent') }}">
                            @csrf

                        <div class="form-group row">

                            <div class="col-md-6">
                                                    <span class="d-flex  justify-content-center align-items-center p-4">

                                <input id="rent" type="submit" class="form-control d-flex  justify-content-center align-items-center p-3" name="rent"   value="Rent" style="" >
                                 <input  type="hidden" name="car"   value={{$car->id}} >
                                                                            </span>

                            </div>
                        </div>
                    </form>
                        @endif


                            </h5>

            </span>

            </div>
        </ul>
    </div>




@endsection