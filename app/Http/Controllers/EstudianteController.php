<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class EstudianteController extends Controller
{
    public function comprobarNombre(){
      return view('estudiante.formulario');
    }
    
    public function validarNombre(Request $request){
      //Session::flash('message-error','El deudor es menor de edad');
      $nombre_apellido = $request["nombre_apellido"];
      Session::flash('message','El nonbre es '.$nombre_apellido);
      return redirect()->to('comprobarnombre');
    }
}
