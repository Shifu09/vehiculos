<?php

use App\Http\Controllers\ReporteController;
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
    return view('auth.login');
});

Auth::routes();
// Route::get('admin/salidapdf', [App\Http\Livewire\Admin\Salida\Single::class, 'pdf']);
// Route::get('/salida-report/{id}', [ReporteController::class, 'generateSalidaReport'])->name('salida.pdf');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rutas para reportes
Route::get('admin/salida/print/{salida}', [\App\Http\Controllers\Admin\SalidaController::class, 'print'])->name('admin.salida.print');

// Rutas para mantenimientos de vehículos
Route::get('/admin/vehiculos/mantenimiento/{id}', App\Http\Livewire\Admin\Vehiculos\MantenimientoList::class)->name('mantenimiento');

// Rutas para impresión de mantenimiento
Route::get('admin/mantenimiento/{mantenimiento}/print', [\App\Http\Controllers\Admin\MantenimientoController::class, 'print'])->name('admin.mantenimiento.print');
