<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarMaintenance extends Model
{
    protected $table = "car_maintenances";
    protected $fillable = ["maintenance","date", "car_id"];

    use HasFactory;
}
