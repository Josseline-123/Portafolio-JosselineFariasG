<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProyectoController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | PROYECTOS PÚBLICOS
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $proyectos = Proyecto::all();

        return view('pages.proyectos', compact('proyectos'));
    }


    /*
    |--------------------------------------------------------------------------
    | PANEL DE ADMINISTRACIÓN
    |--------------------------------------------------------------------------
    */

    public function admin()
    {
        $proyectos = Proyecto::all();

        return view('dashboard', compact('proyectos'));
    }


    /*
    |--------------------------------------------------------------------------
    | CREAR PROYECTO
    |--------------------------------------------------------------------------
    */

    public function create()
    {
        return view('pages.crear-proyecto');
    }


    /*
    |--------------------------------------------------------------------------
    | GUARDAR PROYECTO
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'tecnologias' => 'required|string',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
            'github' => 'nullable|url',
            'demo' => 'nullable|url',
        ]);

        $imagen = null;

        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen')->store('proyectos', 'public');
        }

        Proyecto::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'tecnologias' => $request->tecnologias,
            'imagen' => $imagen,
            'github' => $request->github,
            'demo' => $request->demo,
        ]);

        return redirect('/dashboard')
            ->with('success', 'Proyecto agregado correctamente.');
    }


    /*
    |--------------------------------------------------------------------------
    | EDITAR PROYECTO
    |--------------------------------------------------------------------------
    */

    public function edit(Proyecto $proyecto)
    {
        return view('pages.editar-proyecto', compact('proyecto'));
    }


    /*
    |--------------------------------------------------------------------------
    | ACTUALIZAR PROYECTO
    |--------------------------------------------------------------------------
    */

    public function update(Request $request, Proyecto $proyecto)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'tecnologias' => 'required|string',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
            'github' => 'nullable|url',
            'demo' => 'nullable|url',
        ]);

        $imagen = $proyecto->imagen;

        if ($request->hasFile('imagen')) {

            if ($proyecto->imagen) {
                Storage::disk('public')->delete($proyecto->imagen);
            }

            $imagen = $request->file('imagen')->store('proyectos', 'public');
        }

        $proyecto->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'tecnologias' => $request->tecnologias,
            'imagen' => $imagen,
            'github' => $request->github,
            'demo' => $request->demo,
        ]);

        return redirect('/dashboard')
            ->with('success', 'Proyecto actualizado correctamente.');
    }


    /*
    |--------------------------------------------------------------------------
    | ELIMINAR PROYECTO
    |--------------------------------------------------------------------------
    */

    public function destroy(Proyecto $proyecto)
    {
        if ($proyecto->imagen) {
            Storage::disk('public')->delete($proyecto->imagen);
        }

        $proyecto->delete();

        return redirect('/dashboard')
            ->with('success', 'Proyecto eliminado correctamente.');
    }
}
