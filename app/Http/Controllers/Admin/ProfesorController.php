<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfesorController extends Controller
{

    public function index()
    {
        $profe = User::where('role_id', 2)->get();
        return view('admin.profesor.index', compact('profe'));
    }

    public function create()
    {
        return view('admin.profesor.create');
    }


    public function store(Request $request)
    {

        if (User::where('email', $request->email)->exists()) {
            return back()->with(['info' => 'Emial Ya Registrado', 'color' => 'warning']);
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 2,
        ]);

        return back()->with(['info' => 'PROFESOR REGISTRADO CON EXITO', 'color' => 'success']);
    }

    function show($id)
    {
        $profe = User::find($id);
        return view('admin.profesor.show', compact('profe'));
    }


    public function update(Request $request, $id)
    {
        User::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return back()->with(['color' => 'success', 'info' =>   'profesor actualizado con exito ']);
    }


    public function destroy($id)
    {
        User::find($id)->delete();
        return back()->with(['color' => 'success', 'info' =>   'profesor eliminado con exito ']);
    }

    // retorna el reporte de los profesores registrados
    public function reporteAll()
    {
        $data = User::where('role_id', 2)->get();
        return view('admin.profesor.reportes', compact('data'));
    }
}
