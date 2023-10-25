<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Usuario;

class UsuarioController extends Controller
{
    //

    public function index(){
        $usuarios = Usuario::all();
        return view('usuarios', compact('usuarios'));
    }

    public function create(){
        return view('crearUsuario');
    }

    public function store(Request $request){
        $usuario= new Usuario();
        $usuario->usuario = $request->input("usuario");
        $usuario->nombre = $request->input("nombre");
        $usuario->apellido = $request->input("apellido");
        $usuario->correo = $request->input("correo");
        $usuario->telefono = $request->input("telefono");
        $usuario->password = $request->input("password");
        $usuario->save();
        
        return redirect()->route('usuario.inicio');
    }

    public function edit($id){
        $usuario = Usuario::find($id);
        return view('editarUsuario', compact('usuario'));
    }

    public function update(Request $request, $id){
        $usuario = Usuario::find($id);
        $usuario->nombre = $request->input("nombre");
        $usuario->apellido = $request->input("apellido");
        $usuario->correo = $request->input("correo");
        $usuario->telefono = $request->input("telefono");
        $usuario->password = $request->input("password");
        $usuario->update();

        return redirect()->route('usuario.inicio');

    }

    public function delete($id){
        $usuario = Usuario::find($id);

        if ($usuario <> null ){
            return $usuario;
        }

         return redirect()->route('usuarios/inicio')->width("error", "El registro no existe");
    }
}
