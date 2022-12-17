<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CarController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/car/create/', [CarController::class, 'create'])->name('car.create');
Route::put('/car/store/', [CarController::class, 'store'])->name('car.store');
