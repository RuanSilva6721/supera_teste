<?php

namespace App\Http\Controllers;

use App\Models\Car;
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
        $user = auth()->user();
        dd($user->name);
        return view('cars.create');
    }


    public function store(Request $request)
    {
   
        $car = new Car;

        $car->modelCar = $request->modelCar;
        $car->brandCar = $request->brandCar;
        $car->version = $request->version;
        $car->description = $request->description;
        $car->items = $request->items;

        $car->save();

        return redirect()->route('home');
    }

    public function show(Car $car)
    {
        $car = Car::findOrFail($id);

        $user = auth()->user();
        $hasUserJoined = false;

        if($user){
            $usercars = $user->carsAsParticipant->toArray();

            foreach($usercars as $usercar){
                if($usercar['id']== $id){
                    $hasUserJoined = True;
                }
            }
        }

        $carOwner = User::where('id', $car->user_id)->first()->toArray();

        return view('cars.show', ['car' => $car, 'carOwner' => $carOwner, "hasUserJoined" => $hasUserJoined]);
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
