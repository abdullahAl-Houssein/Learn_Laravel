<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController2 extends Controller
{
  //  /**
    // * Display a listing of the resource.
     //*
     //* @return \Illuminate\Http\Response
     //*/
    public function index()
    {
        $cars = Car::all();
        return view('car.index',[
            'cars' => $cars
        ]);
        //return $cars;
    }

   // /**
 //    * Show the form for creating a new resource.
     //*
     //* @return \Illuminate\Http\Response
     //*/
    public function create()
    {
        return view('car.create');
    }

   // /**
     //* Store a newly created resource in storage.
     //*
     //* @param  \Illuminate\Http\Request  $request
     //* @return \Illuminate\Http\Response
     //*/
    public function store(Request $request)
    {
        $newCar = Car::create([
            'nameCar' => $request->nameCar,
            'typeCar' => $request->typeCar,
            'priceCar' => $request->priceCar,
            'user_id' => 1
        ]);
        return redirect('car/'.$newCar->id);
    }

 //   /**
  //   * Display the specified resource.
  //   *
  //   * @param  \App\Models\Car  $car
  //   * @return \Illuminate\Http\Response
  //   */
    public function show(Car $car_id)
    {
        return view('car.show',[
            'car' => $car_id
        ]);
       // return $car_id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
    }
}
