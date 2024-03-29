<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComunaController;
use App\Http\Controllers\MunicipioController;

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
//rutas de comuna
=======
//Rutas de Comunas
>>>>>>> b6fd7f27214b92b2eee1d3e6ed445622ac778178
Route::get('/comunas', [ComunaController:: class, 'index'])->name('comunas.index');
Route::post('/comunas', [ComunaController::class, 'store'])->name('comunas.store');
Route::get('/comunas/create', [ComunaController::class , 'create'])->name('comunas.create');
Route::delete('/comunas/{comuna}', [ComunaController::class, 'destroy'])->name('comunas.destroy');
Route::put('/comunas/{comuna}', [ComunaController::class, 'update'])->name('comunas.update');
Route::get('/comunas/{comuna}/edit', [ComunaController::class , 'edit'])->name('comunas.edit');

<<<<<<< HEAD
//rutas de municipio
Route::get('/municipios', [MunicipioController:: class, 'index'])->name('municipios.index');

=======
//Rutas de Municipios
Route::get('/municipios', [MunicipioController:: class, 'index'])->name('municipios.index');
>>>>>>> b6fd7f27214b92b2eee1d3e6ed445622ac778178
