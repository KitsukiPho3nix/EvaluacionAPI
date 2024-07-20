<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller {
    public function Crear(Request $request) {
        $nuevaPersona = new Persona();
        $nuevaPersona -> nombre = $request->post('nombre');
        $nuevaPersona -> apellido = $request->post('apellido');
        $nuevaPersona -> telefono = $request->post('telefono');
        $nuevaPersona -> save();

        return $nuevaPersona;
    }
    public function Listar() {
        return Persona::all();
    }
    public function ListarUna($id) {
        return Persona::findOrFail($id);
    }
    public function Modificar(Request $request, $id) {
        $personaModificada = Persona::findOrFail($id);
        $personaModificada -> nombre = $request->post('nombre');
        $personaModificada -> apellido = $request->post('apellido');
        $personaModificada -> telefono = $request->post('telefono');
        $personaModificada -> save();

        return $personaModificada;
    }
    public function Eliminar($id) {
        $personaEliminada = Persona::findOrFail($id);
        $personaEliminada -> delete();
       
        return [ 'mensajeDeEliminacionExitosa' => 'Persona eliminada.' ];
    }
}