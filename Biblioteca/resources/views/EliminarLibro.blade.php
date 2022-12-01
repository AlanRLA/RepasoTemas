@extends('Plantilla')

@section('contenido')


    <div class="container col-md-7 mb-4 mt-4">
    <h2 class="text-center">Confirmación de borrado</h2>
    <br>
        
          <div class="alert alert-warning alert-dimissible fadeshow text-center" role="alert">
            <strong>¿Seguro que desea borrar este libro?</strong> 
            <button type="button" class="btn-close" data-bs-di></button>
          </div>

          <div class="card">
              <div class="card-header">
                <STRong>Libro: </STRong><dfn>{{$consultaId->titulo}}</dfn> 
              </div>
              <div class="card-body">
                <div class="container px-4">
                  <div class="row gx-5">
                    <div class="col">
                     <div class="p-3 border bg-light" style="font-family: 'Times New Roman', Times, serif; font-size:18px">
                       <p class="card-text">ISBN: {{$consultaId->isbn}}</p> 
                       <p class="card-text">Autor: {{$consultaId->id_Autor}}</p>
                       <p class="card-text">Paginas: {{$consultaId->paginas}}</p>
                       <p class="card-text">Editorial: {{$consultaId->editorial}}</p>
                       <p class="card-text">Email Editorial: {{$consultaId->emailEdi}}</p>
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
              <dt>Fecha registro: {{$consultaId->created_at}}</dt>
               <p class="text-center">
                <form action="{{route('libro.destroy',$consultaId->idLibro)}}" class="text-center" method="POST">
                @csrf
                {!!method_field('delete')!!}
                  <button type="submit" class="btn btn-danger text-center">Sí, eliminar</button>
                  <a href="{{route('libros.show')}}" class="btn btn-primary">No, cancelar </a>
                </form>
                  
                </p>
              </div>
          </div><br>
      

@stop
