<?php

namespace App\Http\Controllers;

use App\Models\Reparacion;
use Illuminate\Http\Request;

class ReparacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reparaciones = Reparacion::all();
        return view('reparaciones.index', compact('reparaciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reparaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cliente' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'falla' => 'required',
            'fecha_ingreso' => 'required|date',
            'estado' => 'required'
        ]);

        Reparacion::create([
            'cliente' => $request->cliente,
            'marca' => $request->marca,
            'modelo' => $request->modelo,
            'falla' => $request->falla,
            'fecha_ingreso' => $request->fecha_ingreso,
            'estado' => $request->estado
            ]);
            
            return redirect()->route('reparaciones.index');
        }
    
 
 



    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $reparacion = Reparacion::findOrFail($id);
        return view('reparaciones.show', compact('reparacion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $reparacion = Reparacion::findOrFail($id);
        return view('reparaciones.edit', compact('reparacion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $reparacion = Reparacion::findOrFail($id);
        $reparacion->update([
            'cliente' => $request->cliente,
            'marca' => $request->marca,
            'modelo' => $request->modelo,
            'falla' => $request->falla,
            'fecha_ingreso' => $request->fecha_ingreso,
            'estado' => $request->estado
        ]);
        return redirect()->route('reparaciones.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $reparacion = Reparacion::findOrFail($id);
        $reparacion->delete();
        return redirect()->route('reparaciones.index');
    }


}