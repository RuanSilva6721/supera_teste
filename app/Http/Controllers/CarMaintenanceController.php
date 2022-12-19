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

        $carMaintenance->maintenance = $request->maintenance;
        $carMaintenance->date = $request->date;
        $carMaintenance->car_id = $id;

        $carMaintenance->save();

        return redirect()->route('home');


    }

    public function show(CarMaintenance $carMaintenance)
    {

    }
    public function edit($id)
    {
        $carMaintenance = CarMaintenance::findOrFail($id);
        return view('carMaintenance.edit', ['carMaintenance' => $carMaintenance]);

    }
    public function update(Request $request)
    {
        $data = $request->all();
        CarMaintenance::findOrFail($request->id)->update($data);

        return redirect()->route('home');

    }

    public function destroy($id)
    {
        CarMaintenance::findOrFail($id)->delete();
        return redirect()->route('home');


    }
}
