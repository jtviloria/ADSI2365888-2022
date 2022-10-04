<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rol;

class RolesController extends Controller
{
    public function store(Request $request){

    	$request->validate([
    		"rol" => "required|min:4"
    	]);

    	$rolObj = new Rol;
    	$rolObj->nombreRol = $request->rol;
    	$rolObj->save();

    	return redirect()->route('rol')->with('success', 'Rol Creado Correctamente');
    }

    public function index(){
    	$roles = Rol::all();
    	return view('rol.index', ['roles' => $roles]);
    }

    public function show($id){
    	$rol = Rol::find($id);
    	return view('rol.show', ['rol' => $rol]);
    }

     public function update(Request $request, $id){
    	$rol = Rol::find($id);
    	$rol->nombreRol = $request->rol;
    	$rol->save();

    	return redirect()->route('rol')->with('success', 'Rol Actualizado');
    }

    public function destroy($id){
    	$rol = Rol::find($id);
    	$rol->delete();

    	return redirect()->route('rol')->with('success', 'Rol Eliminado');
    }
}
