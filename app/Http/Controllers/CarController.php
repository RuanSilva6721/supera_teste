<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

    }

    public function create()
    {
        return view('cars.create');
    }


    public function store(Request $request)
    {
   
        $car = new Car;
        $user = auth()->user();

        $car->modelCar = $request->modelCar;
        $car->brandCar = $request->brandCar;
        $car->version = $request->version;
        $car->description = $request->description;
        $car->items = $request->items;
        $car->user_id = $user->id;

        $car->save();

        return redirect()->route('home');
    }

    public function show()
    {
    
       
    }


    public function edit(Car $car)
    {

    }


    public function update(Request $request, Car $car)
    {

    }


    public function destroy(Car $car)
    {

    }
}
