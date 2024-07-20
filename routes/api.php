<?php
use App\Http\Controllers\PersonaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/persona', [PersonaController::class, 'Listar']);