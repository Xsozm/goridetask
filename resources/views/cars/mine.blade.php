@extends('layouts.app')
@section('content')

    <div class="bg-white p-4 container">
        <h2> My Cars :</h2>

        <style>

            .cars{
                border-radius: 50px;
            }
        </style>




        <ol>
            @foreach($cars as $car)
                <div class="cars shadow-sm" style="border-radius: 50px" >

                    <li><h2>Name :{{$car->name}}</h2></li>
                    <li><h2>Model :{{$car->model}}</h2></li>
                    <li><h2>Agency :{{$car->agency->name}}</h2></li>

                    <div style="border-radius: 10px;border:#3d4852">
                        <h6>{{$car->description}}</h6><br>

                    </div>


                        <form method="POST" action="{{ route('unrent') }}">
                            @csrf

                            <div class="form-group row">

                            <div class="col-md-6">
                                                    <span class="d-flex  justify-content-center align-items-center p-4">

                                <input id="rent" type="submit" class="form-control d-flex  justify-content-center align-items-center p-3" name="rent"   value="End Rent" style="" >
                                 <input  type="hidden" name="car"   value={{$car->id}} >
                                                                            </span>

                            </div>
                        </div>
                    </form>





            </span>
                </div>
            @endforeach
        </ol>


    </div>




@endsection