<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- ========== CDNS ========== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
</head>
<body>

    <!-- ========== NAVBAR ========== -->
    <nav class="navbar navbar-expand-lg navbar-light"  style="background-color: #8bb879;">
        <div class="container-fluid">

         <a class="navbar-brand" href={{route('main')}}>Principal</a>

      
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav nav-tabs">
              <li class="nav-item">
                <a class="nav-link" href={{route('form')}}>Registro de libro</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href={{route('regisAut.create')}}>Registro de autor</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <!-- ========== CONTENIDO ========== -->
    @yield('contenido')

    <!-- ========== Pie de pagina ========== -->
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Biblioteca Pública Membrillo ©</strong>  03-11-2022
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    
</body>
</html>