<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComunaController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\PaisController;
use App\Models\Departamento;
use App\Models\Pais;

Route::get('/', function () {
    return view('welcome');
});
 
//Rutas de Comunas
Route::get('/comunas', [ComunaController:: class, 'index'])->name('comunas.index');
Route::post('/comunas', [ComunaController::class, 'store'])->name('comunas.store');
Route::get('/comunas/create', [ComunaController::class , 'create'])->name('comunas.create');
Route::delete('/comunas/{comuna}', [ComunaController::class, 'destroy'])->name('comunas.destroy');
Route::put('/comunas/{comuna}', [ComunaController::class, 'update'])->name('comunas.update');
Route::get('/comunas/{comuna}/edit', [ComunaController::class , 'edit'])->name('comunas.edit');


//rutas de municipio
Route::get('/municipios', [MunicipioController:: class, 'index'])->name('municipios.index');
Route::post('/municipios', [MunicipioController::class, 'store'])->name('municipios.store');
Route::get('/municipios/create', [MunicipioController::class , 'create'])->name('municipios.create');
Route::delete('/municipios/{municipio}',[MunicipioController::class,'destroy'])->name('municipios.destroy');
Route::put('/municipios/{municipio}', [MunicipioController::class, 'update'])->name('municipios.update');
Route::get('/municipios/{municipio}/edit', [MunicipioController::class , 'edit'])->name('municipios.edit');

//rutas de departamentos

Route::get('/departamentos', [DepartamentoController:: class, 'index'])->name('departamento.index');
Route::post('/departamentos', [DepartamentoController::class, 'store'])->name('departamento.store');
Route::get('/departamentos/create', [DepartamentoController::class , 'create'])->name('departamento.create');
Route::delete('/departamento/{departamento}', [DepartamentoController::class, 'destroy'])->name('departamento.destroy');
Route::put('/departamento/{departamento}', [DepartamentoController::class, 'update'])->name('departamento.update');
Route::get('/departamento/{departamento}/edit', [DepartamentoController::class , 'edit'])->name('departamento.edit');

//rutas de pais

Route::get('/pais', [PaisController:: class, 'index'])->name('pais.index');
Route::post('/pais', [PaisController::class, 'store'])->name('pais.store');
Route::get('/pais/create', [PaisController::class , 'create'])->name('pais.create');
Route::delete('/pais/{pais}', [PaisController::class, 'destroy'])->name('pais.destroy');
Route::put('/pais/{pais}', [PaisController::class, 'update'])->name('pais.update');
Route::get('/pais/{pais}/edit', [PaisController::class , 'edit'])->name('pais.edit');



