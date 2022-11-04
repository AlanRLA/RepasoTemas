<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller_Views extends Controller
{
    public function showPrincipal(){
        return view('Principal');
    }

    public function showRegistro(){
        return view('Registro de libro');
    }

    public function ProcesarLibro(Request $req){
        return 'Se esta procesanding';
    }

}
