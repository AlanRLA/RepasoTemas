@extends('PLantilla')

@section('contenido')
    

@if (session()->has('Actualizar'))

{!!"<script> Swal.fire(
    'Todo correcto!',
    'Autor actualizado!',
    'success'
  )</script>"!!}

@endif

@if (session()->has('Eliminado'))

{!!"<script> Swal.fire(
    'Todo correcto!',
    'Autor eliminado!',
    'warning'
  )</script>"!!}

@endif

    <div class="container mt-4 col-md-5">
        <h4 class="text-center">Consulta de autores</h4>
        
        @foreach ($consultaAut as $consul)
            
        <div class="card">
            <div class="card-header">
              <STRong>Autor</STRong> {{$consul->nombre}}
            </div>
            <div class="card-body">
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
              <dt>Fecha registro: {{$consul->created_at}}</dt>
              <p class="text-center">
               <a href="{{route('autor.edit',$consul->idAutor)}}" class="btn btn-info">Editar </a>
               <a href="{{route('autor.show',$consul->idAutor)}}" class="btn btn-danger">Eliminar </a>
              </p>
            
            </div>
        </div><br>
        @endforeach
    </div>
@endsection