<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CarController;
use App\Http\Controllers\CarMaintenanceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('home');
});

Auth::routes();
//home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//cars
Route::get('/car/create/', [CarController::class, 'create'])->name('car.create');
Route::post('/car/store/', [CarController::class, 'store'])->name('car.store');
Route::get('/car/edit/{id}', [CarController::class, 'edit'])->name('car.edit');
Route::put('/car/update/{id}', [CarController::class, 'update'])->name('car.update');
Route::delete('/car/destroy/{id}', [CarController::class, 'destroy'])->name('car.destroy');


//carMaintenance
Route::get('/carMaintenance/create/{id}', [CarMaintenanceController::class, 'create'])->name('carMaintenance.create');
Route::post('/carMaintenance/store/{id}', [CarMaintenanceController::class, 'store'])->name('carMaintenance.store');
Route::get('/carMaintenance/edit/{id}', [CarMaintenanceController::class, 'edit'])->name('carMaintenance.edit');
Route::put('/carMaintenance/update/{id}', [CarMaintenanceController::class, 'update'])->name('carMaintenance.update');
Route::delete('/carMaintenance/destroy/{id}', [CarMaintenanceController::class, 'destroy'])->name('carMaintenance.destroy');
