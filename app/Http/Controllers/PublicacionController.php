<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Publicacion;
use Illuminate\Http\Request;

class PublicacionController extends Controller
{
    public function create(string $id){
        return view('crearPublicacion', ['userID' => $id]);
    }
    public function store(Request $request, string $id){
        $publicacion= new Publicacion;
        $publicacion->idusuario = $id;
        $publicacion->descripcion = $request->input("descripcion");
        $publicacion->save();
        
        return redirect()->route('usuario.inicio');
    }

    public function ver(string $id){
        $publicaciones = Publicacion::where('idusuario', $id)->get();
        return view('verPublicacion', compact('publicaciones', 'id'));
    }
}
