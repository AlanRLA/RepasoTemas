@extends('PLantilla')

@section('contenido')

<div class="container mt-4 col-md-4">
    <h4 class="text-center">Editar de libro</h4>
 
    <div class="card text-dark bg-light mb-3">
        <div class="card-header">Formulario de correciones</div>
         <div class="card-body">

            <form action="{{route('libro.update', $consultaId->idLibro)}}" method="POST">
             @csrf
             {!!method_field ('PUT')!!}
                <div>
                    <label>ISBN*</label>
                    <input class="form-control" type="text" name="nmISBN" placeholder="xxxxxxxxxxxxx" value="{{$consultaId->isbn}}">
                    <p class="text-danger">{{$errors->first('nmISBN')}}</p>         
                </div>
                <div class="mt-2">
                    <label>Título*</label>
                    <input class="form-control" type="text" name="txtTitulo" placeholder="Ingresa título" value="{{$consultaId->titulo}}">
                    <p class="text-danger">{{$errors->first('txtTitulo')}}</p>
                </div>
                <div class="mt-2">
                    <label>Autor*</label>
                        <select class="form-select-control form-select" name="idAutor">
                            <option disabled>Selecciona un autor</option>
                            @foreach ($consulAut as $autores)
                                @if ($autores->nombre == $consulNomAut2->nombre)
                                    <option value="{{$autores->idAutor}}" selected> {{$autores->nombre}}</option> 
                                @else
                                     <option value="{{$autores->idAutor}}"> {{$autores->nombre}}</option>
                                @endif
                            @endforeach
                        </select>
                    <p class="text-danger">{{$errors->first('idAutor')}}</p>
                </div>  
                <div class="mt-2">
                    <label>Páginas*</label>
                    <input class="form-control" type="text" name="nmPaginas" placeholder="xxxx" value="{{$consultaId->paginas}}">
                    <p class="text-danger">{{$errors->first('nmPaginas')}}</p>
                </div>     
                <div class="mt-2">
                    <label>Editorial*</label>
                    <input class="form-control" type="text" name="txtEditorial" placeholder="Ingresa editorial" value="{{$consultaId->editorial}}">
                    <p class="text-danger">{{$errors->first('txtEditorial')}}</p>
                </div> 
                <div class="mt-2 mb-2">
                    <label>Email Editorial*</label>
                    <input class="form-control" type="text" name="emEditorial" placeholder="editorial@email.com" value="{{$consultaId->emailEdi}}">
                    <p class="text-danger">{{$errors->first('emEditorial')}}</p>
                </div> 
                
                <div class="text-center">
                   <button type="submit" class="btn btn-success" name="btn_s">Actualizar</button> 
                   <a href="{{route('libros.show')}}" class="btn btn-danger" >Cancelar</a> 
                </div>         
            </form>      
        </div>
    </div>
</div>
@endsection