@extends('PLantilla')

@section('contenido')


    <div class="container mt-4 col-md-4">
        <h4 class="text-center">Editar registro</h4>


    @if (session()->has('Confirmación'))
    <div class="alert alert-success" role="success">
        <strong>Registrado correctamente</strong>
    </div>  
    @endif

        <div class="card text-dark bg-light mb-3">
            <div class="card-header">Formulario de correciones</div>
             <div class="card-body">

                <form action="{{route('autor.update', $consultaId->idAutor)}}" method="POST">
                 @csrf
                 {!!method_field ('PUT')!!}
                    <div>
                        <label>Nombre Completo*</label>
                        <input class="form-control" type="text" name="txtName" placeholder="Ingresa Nombre Completo" value="{{$consultaId->nombre}}">
                        <p class="text-danger">{{$errors->first('txtName')}}</p>         
                    </div>
                    <div class="mt-2">
                        <label>Fecha de nacimiento*</label>
                        <input class="form-control" type="text" name="txtDate" placeholder="aa/mm/dd" value="{{$consultaId->fecha_n}}">
                        <p class="text-danger">{{$errors->first('txtDate')}}</p>
                    </div>  
                    <div class="mt-2">
                        <label>No. Libros publicados*</label>
                        <input class="form-control" type="text" name="nmBooks" placeholder="Ingresa cantidad de libros publicados" value="{{$consultaId->c_libros}}">
                        <p class="text-danger">{{$errors->first('nmBooks')}}</p>
                    </div>     
                    
                    <div class="text-center">
                       <button type="submit" class="btn btn-success" name="btn_s">Guardar</button> 
                    </div>
                    
                </form>      
            </div>
        </div>
    </div>
@endsection