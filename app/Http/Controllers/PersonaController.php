<?php
namespace App\Http\Controllers;
use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller {
    public function Crear(Request $request) {
        $persona = new Persona();
        $persona -> nombre = $request->post('nombre');
        $persona -> apellido = $request->post('apellido');
        $persona -> telefono = $request->post('telefono');
        $persona -> save();

        return $persona;
    }
    public function Listar() {
        return Persona::all();
    }
    public function ListarUna($id) {
        return Persona::findOrFail($id);
    }
    public function Modificar() {
        //
    }
    public function Eliminar() {
        //
    }
}