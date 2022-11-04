<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validation_form;
use Illuminate\Support\Facades\Redirect;

class Controller_Views extends Controller
{
    public function showPrincipal(){
        return view('Principal');
    }

    public function showRegistro(){
        return view('Registro de libro');
    }

    public function ProcesarLibro(validation_form $req){     

        $titulo = $req->txtTitulo;

        

        return Redirect('Registro')->with('Confirmación',[$titulo]);
    }

}
