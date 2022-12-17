<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function edit($id)
    {
        $car = Car::findOrFail($id);
        return view('cars.edit', ['car' => $car]);
        
    }


    public function update(Request $request)
    {
       
        $data = $request->all();
        Car::findOrFail($request->id)->update($data);
        
        return redirect()->route('home');
    }


    public function destroy($id)
    {
        Car::findOrFail($id)->delete();
        return redirect()->route('home');

    }
}
