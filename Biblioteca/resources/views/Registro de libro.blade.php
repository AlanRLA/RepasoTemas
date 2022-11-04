@extends('PLantilla')

@section('contenido')
    
    <div class="container mt-4 col-md-4">
        <h4 class="text-center">Registro de libro</h4>
        
        <div class="card text-dark bg-light mb-3">
            <div class="card-header">Formulario de registro</div>
             <div class="card-body">
                <form action="">
                    <div>
                        <label>ISBN</label>
                        <input class="form-control" type="text" placeholder="Ingresa ISBN">
                    </div>
                    <div class="mt-2">
                        <label>Título</label>
                        <input class="form-control" type="text" placeholder="Ingresa título">
                    </div>
                    <div class="mt-2">
                        <label>Autor</label>
                        <input class="form-control" type="text" placeholder="Ingresa autor">
                    </div>  
                    <div class="mt-2">
                        <label>Páginas</label>
                        <input class="form-control" type="number" placeholder="Ingresa cantidad de páginas">
                    </div>     
                    <div class="mt-2">
                        <label>Editorial</label>
                        <input class="form-control" type="text" placeholder="Ingresa editorial">
                    </div> 
                    <div class="mt-2 mb-2">
                        <label>Email Editorial</label>
                        <input class="form-control" type="email" placeholder="Ingresa email de la editorial">
                    </div> 
                    
                    <div class="text-center">
                       <button type="button" class="btn btn-success">Guardar</button> 
                    </div>
                    
                </form>               
            </div>
        </div>
    </div>
@endsection