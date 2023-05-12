

<!doctype html>
<html>
<head>
  <title>⚡ APK Mi app en línea</title>
  
  <meta charset="utf-8">
  <meta name="google" content="notranslate">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="https://apkcombo.com/static/svg/apkcombo-icon.svg" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


  <style type="text/css">

      body{

        background-image: url("{{ URL::to('/') }}/img/fondo-mobil.jpeg");
            -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-repeat: no-repeat;

      }

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

      #padre{ width:100%; height:70px; background-color:#CCCCCC; position:relative}
      #hijo{ width:100%; height:50px; background-color:#666666; position:absolute; bottom:0%; right:0%; margin:0 5px 5px 0}

      

        
  </style>
</head>
<body>


  <nav class="navbar navbar-expand-sm navbar-light bg-light ">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#opciones">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <!-- logo -->
    <a class="navbar-brand" href="#">
      <img src="{{ URL::to('/') }}/img/apk-icon.svg" width="30" height="30" alt=""> miappenlinea
    </a>
    
    <!-- enlaces -->
    <div class="collapse navbar-collapse" id="opciones">   
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Inicio <iconify-icon icon="material-symbols:home" style="font-size: 18px;"></iconify-icon></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="categorias">Categorías <iconify-icon icon="carbon:collapse-categories" style="font-size: 18px;"></iconify-icon></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Música y audio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Entretenimiento</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#">Sube tu app <iconify-icon icon="material-symbols:cloud-upload" style="font-size: 18px;color: green;"></iconify-icon></a>
        </li>            
      </ul>
    </div>
  </nav>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <script src="https://code.iconify.design/iconify-icon/1.0.0-beta.3/iconify-icon.min.js"></script>


       <main class="py-4">
            @yield('content')
        </main>

  <div id="padre" style="text-align: center;">
     <div id="hijo" style="padding:10px">
       <span style="color:#fff;">&copy; <?php echo date("Y");?> Miappenlinea</span>
     </div>
   </div> 


</body>
</html>

 