<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Rol;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::all();
        $roles = Rol::all();
        return view('usuario.index', ['usuarios' => $usuarios, 'roles' => $roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'Nombre' => 'required|unique:usuarios|max:30',
            'email' => 'required|email|unique:usuarios',
            'fecha_nacimiento' => 'required',
            'clave' => 'required|min:8',
            'rol_id' => 'required'
        ]);

        $usuario = new Usuario;
        $usuario->Nombre = $request->Nombre;
        $usuario->email = $request->email;
        $usuario->fecha_nacimiento = $request->fecha_nacimiento; 
        $usuario->clave = $request->clave;
        $usuario->rol_id = $request->rol_id;
        $usuario->save();

        return redirect()->route('usuario.index')->with('successs', 'Usuario Registrado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = Usuario::find($id);
        return view('usuario.show', ['usuario' => $usuario]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $usuario = Usuario::find($id);
         $request->validate([
            'Nombre' => 'required|unique:usuarios|max:30',
            'email' => 'required|email|unique:usuarios',
            'fecha_nacimiento' => 'required|fecha_nacimiento|unique:usuarios',
            'clave' => 'required|min:8',
            'rol_id' => 'required'
        ]);

        $usuario = new Usuario;
        $usuario->Nombre = $request->Nombre;
        $usuario->email = $request->email;
        $usuario->fecha_nacimiento = $request->fecha_nacimiento; 
        $usuario->clave = $request->clave;
        $usuario->rol_id = $request->rol_id;
        $usuario->save();

        return redirect()->route('usuarios.index')->with('successs', 'Usuario Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $usuario = Usuario::find($usuario);
        $usuario->delete();

        return redirect()->route('usuarios.index')->with('success', 'Usuario Eliminado');
    }
}
