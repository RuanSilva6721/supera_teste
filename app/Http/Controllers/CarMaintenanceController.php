<?php

namespace App\Http\Controllers;

use App\Models\CarMaintenance;
use Illuminate\Http\Request;

class CarMaintenanceController extends Controller
{
    public function index()
    {

    }


    public function create($id)
    {
        return view('carMaintenance.create', ['id' => $id]);

    }
    public function store(Request $request, $id)
    {
        $carMaintenance = new CarMaintenance;

        dd($request->date);
        $carMaintenance->modelCar = $request->maintenance;
        $carMaintenance->date = $request->date;
        $carMaintenance->car_id = $id;

        $carMaintenance->save();

        return redirect()->route('home');


    }

    public function show(CarMaintenance $carMaintenance)
    {

    }
    public function edit(CarMaintenance $carMaintenance)
    {

    }
    public function update(Request $request, CarMaintenance $carMaintenance)
    {

    }

    public function destroy(CarMaintenance $carMaintenance)
    {

    }
}
