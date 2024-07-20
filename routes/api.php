<?php
use App\Http\Controllers\PersonaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/persona', [PersonaController::class, 'Crear']);
Route::get('/persona', [PersonaController::class, 'Listar']);
Route::get('/persona/{d}', [PersonaController::class, 'ListarUna']);
Route::delete('/persona/{d}', [PersonaController::class, 'Eliminar']);