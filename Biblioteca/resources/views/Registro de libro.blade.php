@extends('PLantilla')

@section('contenido')

    @if (session()->has('Confirmación'))
    <?php $titulo = session()->get('titulo')?>
       <script> 
       Swal.fire(
        'Todo correcto!',
        'Libro "<?php echo($titulo)?>" guardado',
        'success'
         )
         </script>
    @endif

    <div class="container mt-4 col-md-4">
        <h4 class="text-center">Registro de libro</h4>
        
        {{-- IF de mensajes
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    <strong>{{$error}}</strong>
                    Error
                </div>  
            @endforeach                   
        @endif
        --}}       
        <div class="card text-dark bg-light mb-3">
            <div class="card-header">Formulario de registro</div>
             <div class="card-body">

                <form action="{{route('regisLib.store')}}" method="POST">
                 @csrf
                    <div>
                        <label>ISBN*</label>
                        <input class="form-control" type="text" name="nmISBN" placeholder="xxxxxxxxxxxxx" value="{{old('nmISBN')}}">
                        <p class="text-danger">{{$errors->first('nmISBN')}}</p>         
                    </div>
                    <div class="mt-2">
                        <label>Título*</label>
                        <input class="form-control" type="text" name="txtTitulo" placeholder="Ingresa título" value="{{old('txtTitulo')}}">
                        <p class="text-danger">{{$errors->first('txtTitulo')}}</p>
                    </div>
                    <div class="mt-2">
                        <label>Autor*</label>
                            <select class="form-select-control form-select" name="idAutor">
                                <option selected disabled>Selecciona un autor</option>
                                @foreach ($consulAut as $autores)
                                    <option value="{{$autores->idAutor}}">{{$autores->nombre}}</option>
                                @endforeach

                            </select>
                        <p class="text-danger">{{$errors->first('idAutor')}}</p>
                    </div>  
                    <div class="mt-2">
                        <label>Páginas*</label>
                        <input class="form-control" type="text" name="nmPaginas" placeholder="xxxx" value="{{old('nmPaginas')}}">
                        <p class="text-danger">{{$errors->first('nmPaginas')}}</p>
                    </div>     
                    <div class="mt-2">
                        <label>Editorial*</label>
                        <input class="form-control" type="text" name="txtEditorial" placeholder="Ingresa editorial" value="{{old('txtEditorial')}}">
                        <p class="text-danger">{{$errors->first('txtEditorial')}}</p>
                    </div> 
                    <div class="mt-2 mb-2">
                        <label>Email Editorial*</label>
                        <input class="form-control" type="text" name="emEditorial" placeholder="editorial@email.com" value="{{old('emEditorial')}}">
                        <p class="text-danger">{{$errors->first('emEditorial')}}</p>
                    </div> 
                    
                    <div class="text-center">
                       <button type="submit" class="btn btn-success" name="btn_s">Guardar</button> 
                    </div>
                    
                </form>      

            </div>
        </div>
    </div>
@endsection