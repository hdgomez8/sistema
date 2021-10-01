<?php

use App\Http\Controllers\EmpleadoController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

/*
Route::get('/empleado', [EmpleadoController::class,'index']);

Route::get('/empleado/create', [EmpleadoController::class,'create']);

Route::get('/empleado/edit', [EmpleadoController::class,'edit']);

Route::get('/empleado/form', [EmpleadoController::class,'form']);
*/
Route::resource('/empleado', EmpleadoController::class);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
