<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;

class EmpleadoController extends Controller
{
    public function index(){
    	$empleados=Empleado::all();	

    	return view('empleados/Empleados')->with(['empleados'=>$empleados]);
    }
    public function show($id){

    	$empleados=Empleado::where('id',$id)->get();

    	return view('empleados/show')->with(['empleados'=>$empleados]);

    }
}

