<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function rent(Request $request){
       $car_id = $request->car;
       if(!isset($car_id)){
           return "Wrong Car Id";
       }
       $user=auth()->user();
       $car= Car::find($car_id);
        if(!isset($car)){
            return "Car doesn't exist";
        }
        $cars = $user->cars;
        foreach ($cars as $item){
            if($item->id==$car_id){
                return redirect(route('mine'));

            }
        }
        $user->cars()->attach($car_id);
        $user->save();
        return redirect(route('mine'));

    }

    public function unrent(Request $request){
        $car_id = $request->car;
        if(!isset($car_id)){
            return "Wrong Car Id";
        }
        $user=auth()->user();
        $car= Car::find($car_id);
        if(!isset($car)){
            return "Car doesn't exist";
        }
        $cars = $user->cars;
        foreach ($cars as $item){
            if($item->id==$car_id){
                $user->cars()->detach($car_id);
                $user->save();

                return redirect(route('mine'));

            }
        }
        return redirect(route('mine'));

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $c=Car::all();
        return view('cars.view')->with('cars',$c);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $c = Car::find($id);
        if(!isset($c)){
            return "car doesn't exist";
        }
        return view('cars.show')->with('car',$c);
    }
    public function mine(){
        $user =auth()->user();
        if($user->role!='user'){
            return "you must be a normal user";
        }
        $cars = $user->cars;
        return view('cars.mine')->with('cars',$cars);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
