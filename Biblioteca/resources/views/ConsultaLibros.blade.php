@extends('PLantilla')

@section('contenido')
    

@if (session()->has('Actualizar'))

{!!"<script> Swal.fire(
    'Todo correcto!',
    'Libro actualizado!',
    'success'
  )</script>"!!}

@endif

@if (session()->has('Eliminado'))

{!!"<script> Swal.fire(
    'Todo correcto!',
    'Libro eliminado!',
    'warning'
  )</script>"!!}

@endif

@if (session()->has('Actualizado'))

{!!"<script> Swal.fire(
    'Todo correcto!',
    'Libro actualizado!',
    'success'
  )</script>"!!}

@endif

    <div class="container mt-4 col-md-7">
        <h4 class="text-center">Consulta de libros</h4>
        <br>
        
        @foreach ($consulNomAut2 as $consul)
            
        <div class="card">
            <div class="card-header">
              
              <STRong>Libro: </STRong><dfn>{{$consul->titulo}}</dfn> 
            </div>
            <div class="card-body">
              <div class="container px-4">
                <div class="row gx-5">
                  <div class="col">
                   <div class="p-3 border bg-light" style="font-family: 'Times New Roman', Times, serif; font-size:18px">
                     <p class="card-text">ISBN: {{$consul->isbn}}</p> 

                     <p class="card-text">Autor: {{$consul->nombre}}</p>                     
                    
                     <p class="card-text">Paginas: {{$consul->paginas}}</p>
                     <p class="card-text">Editorial: {{$consul->editorial}}</p>
                     <p class="card-text">Email Editorial: {{$consul->emailEdi}}</p>
                   </div>
                </div>
               <div class="col">
                  <div class="p-2 border bg-light text-center">
                    <img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/240/google/298/green-book_1f4d7.png" width="150" height="173">
                  </div>
                </div>
                  
                </div>
              </div>
            </div>
            <div class="card-footer text-muted">
            <dt>Fecha registro: {{$consul->created_at}}</dt>
             <p class="text-center">
                <a href="{{route('libro.edit',$consul->idLibro)}}" class="btn btn-info text-center">Editar </a>
                <a href="{{route('libro.show',$consul->idLibro)}}" class="btn btn-danger">Eliminar </a>
             </p>
            </div>
        </div><br>

        @endforeach
    </div>
@endsection