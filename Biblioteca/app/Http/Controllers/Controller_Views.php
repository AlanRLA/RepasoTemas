<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validation_form;
use App\Http\Requests\validation_formAutores;
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

        return Redirect('regisLib/create')->with('Confirmación','correcto')->with('titulo',$titulo);
    }


    //Autor
    public function showRegistroAutor(){
        return view('Registro de autores');
    }

    public function ProcesarAutor(validation_formAutores $req){     


        return Redirect('RegistroAutor')->with('Confirmación','correcto');
    }

}
