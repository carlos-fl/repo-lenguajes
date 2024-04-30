<?php

use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedoresController;
use Illuminate\Support\Facades\Route;

//Modificado para mostrar los inicios
Route::get('/', function () {
    return view('inicio');
});


// empleado
Route::get('/empleados/inicio', [EmpleadoController::class, 'redirectEmpleadoInicio'])->name('empleados.inicio');
Route::get('/empleados/crear/form', [EmpleadoController::class, 'redirectToForm'])->name('empleados.crear.form');
Route::post('/empleados/crear', [EmpleadoController::class, 'createEmpleado'])->name('empleados.crear');
Route::get('/empleados/registros', [EmpleadoController::class, 'redirectToEmpleadosRegistro'])->name('empleados.registro');

// proveedores
Route::get('/proveedores/inicio', [ProveedoresController::class, 'redirectProveedoresInicio'])->name('proveedores.inicio');
Route::get('/proveedores/crear/form', [ProveedoresController::class, 'redirectToForm'])->name('proveedores.crear.form');
Route::post('/proveedores/crear', [ProveedoresController::class, 'createProveedor'])->name('proveedores.crear');
Route::get('/proveedores/registros', [ProveedoresController::class, 'redirectToProveedoresRegistro'])->name('proveedores.registro');

//producto
Route::get('/productos/inicio', [ProductoController::class, 'redirectProductoInicio'])->name('productos.inicio');
Route::get('/productos/crear/form', [ProductoController::class, 'redirectToForm'])->name('productos.crear.form');
Route::post('/productos/crear', [ProductoController::class, 'createProducto'])->name('productos.crear');
Route::get('/productos/registros', [ProductoController::class, 'redirectToProductosRegistro'])->name('productos.registro');
