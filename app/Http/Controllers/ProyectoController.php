<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;
use App\Empleado;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos=Proyecto::All();	
    
        return view('proyectos.Proyectos',['proyectos'=>$proyectos]);
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $empleados = Empleado::all();
        return view('proyectos.nuevo')->with(['empleados' => $empleados]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'titulo' => 'required',
            'fechainIni' => 'required|date',
            'fechaFin' => 'required|date',
            'horas' => 'required|numeric',
            'empleado' => 'required|numeric'
        ]);

        $proyectos = Proyecto::all();
        $proyecto = new Proyecto;
        $proyecto -> nombre = $request -> input('nombre');
        $proyecto -> titulo = $request -> input('titulo');
        $proyecto -> fechainicio = $request -> input('fechaIni');
        $proyecto -> fechafin = $request -> input('fechaFin');
        $proyecto -> horasestimadas = $request -> input('horas');
        $proyecto -> empleado_id = $request -> input('empleado');
        $proyecto -> save();
        return view('proyectos.Proyectos',['proyectos'=>$proyectos]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
    
        $proyecto = Proyecto::find($id);
        return view('proyectos.show')->with(['proyecto' => $proyecto]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyecto = Proyecto::find($id);
        $empleados = Empleado::all();
        return view('proyectos.edit')->with(['proyecto' => $proyecto, 'empleados' => $empleados]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'titulo' => 'required',
            'fechainIni' => 'required|date',
            'fechaFin' => 'required|date',
            'horas' => 'required|numeric',
            'empleado' => 'required|numeric'
        ]);

        $proyecto = Proyecto::find($id);
        $empleados = Empleado::all();
        $proyecto -> nombre = $request -> input('nombre');
        $proyecto -> titulo = $request -> input('titulo');
        $proyecto -> fechainicio = $request -> input('fechaInicio');
        $proyecto -> fechafin = $request -> input('fechaFin');
        $proyecto -> horasestimadas = $request -> input('horas');
        $proyecto -> empleado->nombre = $request -> input('empleado');
        $proyecto -> save();
        return view('proyectos.show')->with(['proyecto' => $proyecto, 'empleados' => $empleados]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Proyecto::find($id);
        $project->delete();
        return redirect(route('proyectos.Proyectos'));
    }
}
