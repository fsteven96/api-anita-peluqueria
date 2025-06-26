<?php

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\AtencionController;

Route::post('/login', [AuthController::class, 'login']);
Route::get('/todosClientes', [ClienteController::class, 'todosClientes']);
Route::post('/agregarCliente', [ClienteController::class, 'agregarCliente']);
Route::get('/citas/activas', [CitaController::class, 'obtenerCitasActivas']);
Route::post('/nueva/citas', [CitaController::class, 'crearCita']);
Route::get('/atenciones', [AtencionController::class, 'index']);
Route::post('/atenciones', [AtencionController::class, 'store']);
Route::get('/mensaje', function () {
    return response()->json(['mensaje' => 'Hola desde Laravel API']);
});
Route::post('/eco', function (\Illuminate\Http\Request $request) {
    return response()->json([
        'recibido' => $request->all()
    ]);
});
