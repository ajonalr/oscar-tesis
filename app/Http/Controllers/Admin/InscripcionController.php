<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use App\Models\Estudiante;
use App\Models\Grado;
use App\Models\Inscripcion;
use App\Models\Padre;
use App\Models\TareaEstudiente;
use App\Models\TareaGrado;
use Illuminate\Http\Request;

class InscripcionController extends Controller
{
    public function index()
    {
        $grado = Grado::all();
        return view('admin.inscripcion.create', ['grados' => $grado]);
    }

    public function inscribir(Request $request)
    {
        $grado_id = explode("___", $request->grado_id);
        $encargado = new Padre();
        $encargado->nombre1 = $request->nombre1;
        $encargado->nombre2 = $request->nombre2;
        $encargado->dpi1 = $request->dpi1;
        $encargado->dpi2 = $request->dpi2;
        $encargado->direccion1 = $request->direccion1;
        $encargado->direccion2 = $request->direccion2;
        $encargado->civil1 = $request->civil1;
        $encargado->civil2 = $request->civil2;
        $encargado->nacionalidad1 = $request->nacionalidad1;
        $encargado->nacionalidad2 = $request->nacionalidad2;
        $encargado->edad1 = $request->edad1;
        $encargado->edad2 = $request->edad2;
        $encargado->telefono1 = $request->telefono1;
        $encargado->telefono2 = $request->telefono2;
        $encargado->telefono3 = $request->telefono3;
        $encargado->telefono4 = $request->telefono4;
        $encargado->lugart1 = $request->lugart1;
        $encargado->lugart2 = $request->lugart2;
        $encargado->empresa1 = $request->empresa1;
        $encargado->empresa2 = $request->empresa2;
        $encargado->tel_empresa1 = $request->tel_empresa1;
        $encargado->tel_empresa2 = $request->tel_empresa2;
        $encargado->profecion1 = $request->profecion1;
        $encargado->profecion2 = $request->profecion2;
        $encargado->parentesco1 = $request->parentesco1;
        $encargado->parentesco2 = $request->parentesco2;
        // CAMBIOS SOLICITADOS
        $encargado->save();
        $estudiante = new Estudiante();
        $estudiante->nombre = $request->nombre;
        $estudiante->fecha_nacimiento = $request->fecha_nacimiento;
        $estudiante->cui = $request->cui;
        $estudiante->telefono = $request->telefono;
        $estudiante->ciclo = config('app.cliclo');
        $estudiante->jornada = 'MATUTINA';
        $estudiante->save();

        $inscripcion = new Inscripcion();

        $inscripcion->padre_id = $encargado->id;
        $inscripcion->estudiante_id = $estudiante->id;
        $inscripcion->grado_id = $grado_id[0];

        $inscripcion->save();



        // buscamos los cusrsos de un grado

        $curso = Curso::where('grado_id', $grado_id[0])->get();
        if (count($curso) > 0) {
            foreach ($curso as $cur) {
                // asignamos todas la tareas de un estudiante nuevo
                $tareas_grado = TareaGrado::where('curso_id', $cur->id)->get();

                if (count($tareas_grado) > 0) {
                    foreach ($tareas_grado as $ta) {
                        $te = new TareaEstudiente();
                        $te->estudiante_id = $estudiante->id;
                        $te->tarea_id = $ta->id;
                        $te->calificacion = 0;
                        $te->save();
                    }
                }
            }
        }


        return back()->with(['info' => 'ESTUDIANTE '  . $estudiante->nombre . ' InSCRITO CON EXITO', 'color' => 'success']);
    }
}
