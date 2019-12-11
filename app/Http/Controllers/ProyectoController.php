<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;

class ProyectoController extends Controller
{
    public function index(){
    	$proyectos=Proyecto::all();	

    	return view('proyectos.Proyectos',['proyectos'=>$proyectos]);
    }
    public function show($id){

    	$proyectos=Proyecto::where('id',$id)->get();

    	return view('proyectos/Proyecto')->with(['proyectos'=>$proyectos]);

    }
}
