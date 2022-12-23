<?php

namespace App\Http\Controllers;

use App\Models\CarMaintenance;
use App\Services\CarMaintenanceService;
use Illuminate\Http\Request;
use PHPUnit\Exception;

class CarMaintenanceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

    }


    public function create($id)
    {
        return view('carMaintenance.create', ['id' => $id]);

    }
    public function store(Request $request, $id, CarMaintenanceService $carMaintenanceService)
    {
        try {
            $carMaintenanceService->store($request, $id);
            return redirect()->route('home')->with('msg', 'Manutenção do carro adicionado com sucesso!');

        } catch (Exception $e) {
            return redirect()->route('home')->with('msg2', 'Falha ao tentar adiconar a Manutenção do carro!');
        }

    }

    public function edit($id, CarMaintenanceService $carMaintenanceService)
    {
        try {
            $carMaintenance = $carMaintenanceService->edit($id);
            return view('carMaintenance.edit', ['carMaintenance' => $carMaintenance]);

       } catch (Exception $e) {
           return redirect()->route('home')->with('msg2', 'Manutenção não encontrado!');
       }

    }
    public function update(Request $request, CarMaintenanceService $carMaintenanceService)
    {
        try {
            $carMaintenanceService->update($request);
            return redirect()->route('home')->with('msg', 'Manutenção do carro atualizado com sucesso!');

        } catch (Exception $e) {
            return redirect()->route('home')->with('msg2', 'Falha ao tentar atualizar o carro carro!');
        }
    }

    public function destroy($id , CarMaintenanceService $carMaintenanceService)
    {
        try {
            $carMaintenanceService->destroy($id);
            return redirect()->route('home')->with('msg', 'Manutenção do carro deletado com sucesso!');

      } catch (Exception $e) {
          return redirect()->route('home')->with('msg2', 'Falha ao tentar deletar o carro carro!');
      }   
    }
}
