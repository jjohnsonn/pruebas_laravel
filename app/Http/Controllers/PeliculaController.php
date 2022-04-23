<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    public function index($listado = 1){
        $titulo = "Titulo del index clase prueba redirecciones";
        return view('pelicula.index',[
            'titulo' => $titulo,
            'listado' => $listado
        ]);
    }

    public function detalle($year = null){
        return view('pelicula.detalle',[
            'year' => $year
        ]);
    }

    public function redirigir(){
        return redirect()->route('detalles.pelicula');
    }

    public function formulario(){
        return view('pelicula.formulario');
    }

    public function recibir(Request $request){
        $nombre = $request->input('nombre');
        $email = $request->input('email');
        
        return view('pelicula.recibir',[
            'nombre' => $nombre,
            'email' => $email
        ]);
    }

}
