<?php
namespace App\Http\Controllers;
use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller {
    public function Crear() {
        //
    }
    public function Listar() {
        return Persona::all();
    }
    public function ListarUna() {
        //
    }
    public function Modificar() {
        //
    }
    public function Eliminar() {
        //
    }
}