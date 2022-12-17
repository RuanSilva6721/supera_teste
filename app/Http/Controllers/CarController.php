<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
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

        $car->modelCar = $request->modelCar;
        $car->brandCar = $request->brandCar;
        $car->version = $request->version;
        $car->description = $request->description;
        $car->items = $request->items;

        //image upload
        if($request->hasfile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now') . "." . $extension);

            $requestImage->move(public_path('img/cars'), $imageName);

            $car->image = $imageName;

        }

        $user = auth()->user();
        $car->user_id = $user->id;

        $car->save();

        return redirect('/')->with('msg', 'caro criando com sucesso!');
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
