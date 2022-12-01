@extends('Plantilla')

@section('contenido')


    <div class="container col-md-6 mb-4 mt-4">
    <h2 class="text-center">Confirmación de borrado</h2>
    <br>
        <div class="alert alert-warning alert-dimissible fadeshow text-center" role="alert">
            <strong>¿Seguro que desea borrar este autor?</strong> 
            <button type="button" class="btn-close" data-bs-di></button>
        </div>
        

        <div class="card">
            <div class="card-header">
              <STRong>Autor</STRong> {{$consultaId->nombre}}
            </div>
            <div class="card-body">
              <div class="container px-4">
                <div class="row gx-5">
                  <div class="col">
                   <div class="p-3 border bg-light" style="font-family: 'Times New Roman', Times, serif; font-size:18px">
                     <p class="card-text">Fecha de nacimiento: {{$consultaId->fecha_n}}</p>
                     <p class="card-text">Cantidad de libros publicados: {{$consultaId->c_libros}}</p>
                   </div>
                </div>
                  
                </div>
              </div>
            </div>
            <div class="card-footer text-muted">
              <dt>Fecha registro: {{$consultaId->created_at}}</dt> 
            <form action="{{route('autor.destroy', $consultaId->idAutor)}}" method="POST" class="text-center">
             @csrf
            {!!method_field('delete')!!}
              <button type="submit" class="btn btn-danger">Si, borrar</button> 
              <a href="{{route('regisAut.index')}}" class="btn btn-primary">No, cancelar </a>

            </form> 
              

            </div>
        </div><br>
    </div>

@stop
