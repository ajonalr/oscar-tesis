<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Grado;
use App\Models\TareaGrado;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GradoController extends Controller
{
    public function index()
    {
        // all() = llamar a todos los registros = "select * from grados"
        $grados = Grado::all();
        return view('admin.grados.index', compact('grados'));
    }

    public function show($id)
    {
        $grado = Grado::find($id);
        return view('admin.grados.show', compact('grado'));
    }

    // rederisar el formulario de creacion
    public function create()
    {
        $profe = User::where('role_id', '=', 2)->get();
        return view('admin.grados.create', compact('profe'));
    }

    public function store(Request $request)
    {

        if (Grado::where('nombre', $request->nombre)->where('seccion', $request->seccion)->first()) {
            return back()->with(['info' => 'EL GRADO YA HA SIDO REGISTRADO', 'color' => 'info']);
        }

        Grado::create($request->all());
        return back()->with(['info' => 'grado guardado con exito', 'color' => 'success']);
    }

    public function delete($id)
    {
        Grado::find($id)->delete();
        return back()->with(['info' => 'grado elimindado con exito', 'color' => 'success']);
    }

    public function update(Request $request, $id)
    {
        Grado::find($id)->update($request->all());
        return back()->with(['info' => 'grado actualizado con exito', 'color' => 'success']);
    }

    // retorna la vista para realizar reportes
    public function reportes()
    {
        $grado = Grado::all();
        return view('admin.grados.reportes', compact('grado'));
    }

    public function allgrados()
    {
        $data = Grado::all();
        return view('admin.grados.reportes.all', compact('data'));
    }

    // tareas to bimestre retorna las trareas de un grado y bimestre
    public function tareas_to_grado(Request $request)
    {
        $data =
            DB::table('tarea_grados as tg')
            ->join('cursos as cu', 'tg.curso_id', '=', 'cu.id')
            ->select('tg.*', 'cu.*', 'tg.nombre as tarea')
            ->where('cu.grado_id', $request->grado_id)
            ->where('tg.bimestre', $request->bimestre)
            ->where('tg.valor', '>', 0)
            ->get();
        return view('admin.grados.reportes.tareas', compact('data'));
    }
}
