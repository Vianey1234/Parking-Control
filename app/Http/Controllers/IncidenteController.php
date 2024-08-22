<?php

namespace App\Http\Controllers;

use App\Models\Incidente;
use Illuminate\Http\Request;

class IncidenteController extends Controller
{
    public function index()
    {
        $incidentes = Incidente::paginate(10); // Usar paginación
        return view('incidentes.index', compact('incidentes'));
    }

    public function create()
    {
        return view('incidentes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'tipo' => 'required',
        ]);

        Incidente::create($request->all());
        return redirect()->route('incidentes.index')->with('success', 'Incidente creado con éxito.');
    }

    public function show(Incidente $incidente)
    {
        return view('incidentes.show', compact('incidente'));
    }

    public function edit(Incidente $incidente)
    {
        return view('incidentes.edit', compact('incidente'));
    }

    public function update(Request $request, Incidente $incidente)
    {
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'tipo' => 'required',
        ]);

        $incidente->update($request->all());
        return redirect()->route('incidentes.index')->with('success', 'Incidente actualizado con éxito.');
    }

    public function destroy(Incidente $incidente)
    {
        $incidente->delete();
        return redirect()->route('incidentes.index')->with('success', 'Incidente eliminado con éxito.');
    }
}
