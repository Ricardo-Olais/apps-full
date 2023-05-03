

<!doctype html>
<html>
<head>
  <title>Prueba de Bootstrap 4</title> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


  <style type="text/css">
      .info {
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    margin-left: 90px;
    margin-top: -60px;
   }

    .l_item {
        width: 350px;
        padding: 10px;
        display: inline-block;
        vertical-align: top;
        white-space: normal;
        position: relative;
        line-height: 1.2;
    }
        a:link {
          color: black;
        }

        /* visited link */
        a:visited {
          color: green;
        }

        /* mouse over link */
        a:hover {
          color: black;
        }

        /* selected link */
        a:active {
          color: hotpink;
        }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-sm navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#opciones">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <!-- logo -->
    <a class="navbar-brand" href="#">
      <img src="http://www.tutorialesprogramacionya.com/imagenes/foto1.jpg" width="30" height="30" alt="">
    </a>
    
    <!-- enlaces -->
    <div class="collapse navbar-collapse" id="opciones">   
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="categorias">Categorías</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Música y audio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Entretenimiento</a>
        </li>            
      </ul>
    </div>
  </nav>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




       <main class="py-4">
            @yield('content')
        </main>


</body>
</html>

 