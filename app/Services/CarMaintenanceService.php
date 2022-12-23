<?php

namespace App\Services;

use App\Repositories\CarMaintenanceRepository;

class CarMaintenanceService
{
    private $CarMaintenanceRepository;
    public function __construct(CarMaintenanceRepository $CarMaintenanceRepository)
    {

        $this->CarMaintenanceRepository = $CarMaintenanceRepository;
    }

    public function store($request, $id)
    {
        return $this->CarMaintenanceRepository->store($request, $id);
    }
    public function edit($id)
    {
        
        return $this->CarMaintenanceRepository->edit($id);
    }
    public function update($request)
    {
        
        return $this->CarMaintenanceRepository->update($request);
    }
    public function destroy($id)
    {
        
        return $this->CarMaintenanceRepository->destroy($id);
    }
}
