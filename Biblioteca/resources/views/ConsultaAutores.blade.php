@extends('PLantilla')

@section('contenido')
    
    <div class="container mt-4 col-md-5">
        <h4 class="text-center">Consulta de autores</h4>
        <br>

        <div class="container col-md-6 mb-3 d-grid gap-3">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalAdd">
                Registrar Autor
            </button>
        </div>

        @foreach ($consultaAut as $consul)
            
        <div class="card">
            <div class="card-header">
              <STRong>Autor</STRong> {{$consul->nombre}}
            </div>
            <div class="card-body">
      
              <p class="card-text" style="font-family: 'Times New Roman', Times, serif; font-size:20px;">
              </p>
              
              <div class="container px-4">
                <div class="row gx-5">
                  <div class="col">
                   <div class="p-3 border bg-light" style="font-family: 'Times New Roman', Times, serif; font-size:18px">
                     <p class="card-text">Fecha de nacimiento: {{$consul->fecha_n}}</p>
                     <p class="card-text">Cantidad de libros publicados: {{$consul->c_libros}}</p>
                   </div>
                </div>
                  
                </div>
              </div>
            </div>
            <div class="card-footer text-muted">
              Fecha registro: {{$consul->created_at}}
              <a class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalUpdt">
                Editar autor
            </a>
            
  
            <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDest">
                Eliminar autor
            </a>
            </div>
        </div>
        @endforeach
    </div>
    <br>
@endsection