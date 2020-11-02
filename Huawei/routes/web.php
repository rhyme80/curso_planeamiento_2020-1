<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmpresaController;
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

Route::get('/', HomeController::class);    

Route::get('Empresa', [EmpresaController::class,"index"])->name('Empresa.index');

Route::get('Empresa/Informacion', [EmpresaController::class,"Informacion"])->name('Empresa.Informacion');

Route::get('Empresa/Contactanos', [EmpresaController::class,"Contactanos"])->name('Empresa.Contactanos');

Route::get('Empresa/Matrices', [EmpresaController::class,"Matrices"])->name('Empresa.Matrices');

Route::get('Empresa/PlanEstrategico', [EmpresaController::class,"PlanEstrategico"])->name('Empresa.PlanEstrategico');





    


