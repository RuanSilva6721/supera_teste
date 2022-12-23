<?php
namespace App\Repositories;
use App\Models\CarMaintenance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarMaintenanceRepositoryEloquent implements CarMaintenanceRepository{

    public function store(Request $request, $id){

        return  DB::transaction(function () use ($request, $id) {
            $carMaintenance = new CarMaintenance;

            $carMaintenance->maintenance = $request->maintenance;
            $carMaintenance->date = $request->date;
            $carMaintenance->car_id = $id;
    
            $carMaintenance->save();
 
         });
          
    }
    public function edit($id){
        
        return CarMaintenance::findOrFail($id);
          
    }
    public function update(Request $request){

        return  DB::transaction(function () use ($request) {
            
        $data = $request->all();
        CarMaintenance::findOrFail($request->id)->update($data);
 
         });
          
    }
    public function destroy($id){
        
        CarMaintenance::findOrFail($id)->delete();
          
    }

    }