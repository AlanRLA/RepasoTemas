<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validation_formAutores;
use App\Http\Requests\validation_form;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB as FacadesDB;

class controllerDB extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultaAut = DB::table('tb_autores')->get();
        return view('ConsultaAutores',compact('consultaAut'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Registro de autores');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validation_formAutores $request)
    {
        DB::table('tb_autores')->insert([
            "nombre" => $request->input('txtName'),
            "fecha_n" => $request->input('txtDate'),
            "c_libros" => $request->input('nmBooks'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
    
        return redirect('regisAut/create')->with('Confirmación','success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $consultaId = DB::table('tb_autores')->where('idAutor',$id)->first();

        return view('EliminarAutor', compact('consultaId'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultaId = DB::table('tb_autores')->where('idAutor',$id)->first();

        return view('EditarAutor', compact('consultaId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(validation_formAutores $request, $id)
    {
        DB::table('tb_autores')->where('idAutor',$id)->update([
            "nombre" => $request->input('txtName'),
            "fecha_n" => $request->input('txtDate'),
            "c_libros" => $request->input('nmBooks'),
            "updated_at" => Carbon::now()
        ]);

        return redirect('regisAut')->with('Actualizar','updt');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_autores')->where('idAutor',$id)->delete();

        return redirect('regisAut')->with('Eliminado','dest');

    }

    /* L I B R O */
    public function createLibro()
    {
        $consulAut = DB::table('tb_autores')->get();

        return view('Registro de libro',compact('consulAut'));
    }

    public function storeLibro(validation_form $request)
    {
        DB::table('tb_libros')->insert([
            "isbn" => $request->input('nmISBN'),
            "titulo" => $request->input('txtTitulo'),
            "id_Autor" => $request->input('idAutor'),
            "paginas" => $request->input('nmPaginas'),
            "editorial" => $request->input('txtEditorial'),
            "emailEdi" => $request->input('emEditorial'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
    
        $titulo = $request->txtTitulo;

        return redirect('regisLib/create')->with('Confirmación','success')->with('titulo',$titulo);
    }

    public function libros()
    {
        $consultaLib = DB::table('tb_libros')->get();
        return view('ConsultaLibros',compact('consultaLib'));
    }

    public function editLibro($id)
    {
        $consultaId = DB::table('tb_libros')->where('idLibro',$id)->first();
        $consulAut = DB::table('tb_autores')->get();

        return view('EditarLibro', compact('consultaId', 'consulAut'));
    }

    public function updateLibro(validation_form $request, $id)
    {
        DB::table('tb_libros')->where('idLibro',$id)->update([
            "isbn" => $request->input('nmISBN'),
            "titulo" => $request->input('txtTitulo'),
            "id_Autor" => $request->input('idAutor'),
            "paginas" => $request->input('nmPaginas'),
            "editorial" => $request->input('txtEditorial'),
            "emailEdi" => $request->input('emEditorial'),
            "updated_at" => Carbon::now()
        ]);

        return redirect('libros')->with('Actualizado','updt');
    }
}
