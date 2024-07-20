<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Persona;

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
    public function Modificar(Request $request, $id) {
        $persona = Persona::findOrFail($id);
        $persona -> nombre = $request->post('nombre');
        $persona -> apellido = $request->post('apellido');
        $persona -> telefono = $request->post('telefono');
        $persona -> save();

        return $persona;
    }
    public function Eliminar($id) {
        $persona = Persona::findOrFail($id);
        $persona -> delete();
       
        return [ 'mensajeDeEliminacionExitosa' => 'Persona eliminada.' ];
    }
}