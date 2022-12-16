<?php

use App\Http\Controllers\GestorController;
use App\Http\Controllers\OrdenController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\SolicitudController;
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
    return view('gestor');
});
Route::get('/gestor', [GestorController::class, 'index'])->name('gestor.index');
Route::get('/productos', [ProductoController::class, 'index'])->name('producto.index');
Route::get('/solicitudes', [SolicitudController::class, 'index'])->name('solicitud.index');
Route::get('/ordenes', [OrdenController::class, 'index'])->name('orden.index');
Route::get('/planes', [PlanController::class, 'index'])->name('plan.index');

//Rutas del modelo Plan de distribución
Route::get('/elaborar-plan', [PlanController::class, 'create'])->name('plan.create');
Route::get('/{plan}/editar-plan', [PlanController::class, 'edit'])->name('plan.edit');
Route::post('/guardar-plan', [PlanController::class, 'store'])->name('plan.store');
Route::put('/{plan}/actualizar-plan',[PlanController::class, 'update'])->name('plan.update');
Route::get('/{plan}/mostrar-plan', [PlanController::class, 'show'])->name('plan.show');
Route::delete('/{plan}/eliminar-plan',[PlanController::class, 'destroy'])->name('plan.destroy');

//Rutas del modelo Orden de despacho
Route::get('/elaborar-orden', [OrdenController::class, 'create'])->name('orden.create');
Route::get('/{producto}/elaborar-orden-alt', [OrdenController::class, 'create_alt'])->name('orden.create_alt');
Route::get('/{orden}/editar-orden', [OrdenController::class, 'edit'])->name('orden.edit');
Route::post('/guardar-orden', [OrdenController::class, 'store'])->name('orden.store');
Route::put('/{orden}/actualizar-orden',[OrdenController::class, 'update'])->name('orden.update');
Route::get('/{orden}/mostrar-orden', [OrdenController::class, 'show'])->name('orden.show');
Route::delete('/{orden}/eliminar-orden',[OrdenController::class, 'destroy'])->name('orden.destroy');

//Rutas para los reportes
Route::get('/{plan}/reporte-plan', [PlanController::class, 'reporte_pdf'])->name('plan.reporte');
Route::get('/{orden}/reporte-orden', [PlanController::class, 'reporte_pdf'])->name('orden.reporte');

