<?php

namespace App\Http\Controllers;

use App\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $car = Vehicle::orderBy('id','desc')->get();
        return response()->json($car);
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
        $car = new Vehicle;
        
        $car->registration_number = $request->registration_number;
        $car->description = $request->description;
        $car->mark = $request->mark;
        $car->model = $request->model;
        $car->category = $request->category;
        $car->image_url = $request->image_url;
        $car->fuel = $request->fuel;
        $car->price = $request->price;
        $car->gearbox = $request->gearbox;
        $car->save();

        return response()->json($car);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Vehicle::findOrFail($id);
        return response()->json($car);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $car = Vehicle::findOrFail($id);
        $car->registration_number = $request->registration_number;
        $car->description = $request->description;
        $car->mark = $request->mark;
        $car->model = $request->model;
        $car->category = $request->category;
        $car->image_url = $request->image_url;
        $car->fuel = $request->fuel;
        $car->price = $request->price;
        $car->gearbox = $request->gearbox;
        $car->save();
        return response()->json($car);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Vehicle::findOrFail($id);
        $car->delete();
        return response()->json($car);
    }
}
