<?php
namespace App\Repositories;
use App\Models\CarMaintenance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

interface CarMaintenanceRepository{

    public function store(Request $request, $id);
    public function edit($id);
    public function update(Request $request);
    public function destroy($id);
    
}