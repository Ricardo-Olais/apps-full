

<!doctype html>
<html>
<head>
  <title>Mi app en línea</title> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


  <style type="text/css">
     body{
        //background-image: url("");
        background-image: url("{{ URL::to('/') }}/img/fondo-mobil.jpeg");
         -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-repeat: no-repeat;
      }


    .info {
    
    white-space: nowrap;
    text-overflow: ellipsis;
    margin-left: 90px;
    margin-top: -60px;
   }

    .l_item {
        width: 100%;
        padding: 10px;
        display: inline-block;
        vertical-align: top;
        white-space: normal;
        position: relative;
        line-height: 1.2;
        text-align: center;

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

        .card{

          height: 100px !important;
        }

        #padre{ width:100%; height:70px; background-color:#CCCCCC; position:relative}
         #hijo{ width:100%; height:50px; background-color:#666666; position:absolute; bottom:0%; right:0%; margin:0 5px 5px 0}

       .card {
        /* Add shadows to create the "card" effect */
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
      }

      /* On mouse-over, add a deeper shadow */
      .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
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
      <img src="img/apk-icon.svg" width="30" height="30" alt=""> miappenlinea
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
<div class="card" style="width:100%;height: 25px !important;background-color: #000;">
 <center><strong style="color:#fff;">Categorías</strong></center>
</div>

<div class="container">
  <div class="row">
    <div class="col-6">


 <a class="nav-link l_item" href="#">
<div class="card" style="width:100%">
    <div class="card-body">
      <h6 class="card-title"><iconify-icon icon="material-symbols:music-note" style="font-size: 22px;"></iconify-icon> Música y audio</h6>


    </div>
  </div>

</a>

 <a class="nav-link l_item" href="entretenimiento">
<div class="card" style="width:100%">
    <div class="card-body">
      <h6 class="card-title"><iconify-icon icon="streamline:entertainment-play-list-1-screen-television-display-player-movies-movie-tv-media-players-video" style="font-size: 24px;"></iconify-icon> Entretenimiento</h6>

    

    </div>
  </div>

</a>


 <a class="nav-link l_item" href="#">
<div class="card" style="width:100%;">
    <div class="card-body">
      <h6 class="card-title"><iconify-icon icon="material-symbols:video-camera-back-rounded" style="font-size: 22px;"></iconify-icon> 
        <iconify-icon icon="mdi:photography" style="font-size: 22px;"></iconify-icon>
      Video y fotografía</h6>

    </div>
  </div>

</a>

 <a class="nav-link l_item" href="#">
<div class="card" style="width:100%;">
    <div class="card-body">
      <h6 class="card-title"><iconify-icon icon="material-symbols:sports-baseball" style="font-size: 22px;"></iconify-icon> Deportes</h6>

    </div>
  </div>

</a>


 <a class="nav-link l_item" href="#">
<div class="card" style="width:100%;">
    <div class="card-body">
      <h6 class="card-title"><iconify-icon icon="streamline:food-kitchenware-fork-spoon-fork-spoon-food-dine-cook-utensils-eat-restaurant-dining" style="font-size: 22px;"></iconify-icon> Comer y beber</h6>

    </div>
  </div>

</a>

 <a class="nav-link l_item" href="juegos">
<div class="card" style="width:100%;">
    <div class="card-body">
      <h6 class="card-title"><iconify-icon icon="ion:game-controller" style="font-size: 22px;"></iconify-icon> Juegos</h6>

    </div>
  </div>

</a>


</div>

<div class="col-6">


 <a class="nav-link l_item" href="#">
<div class="card" style="width:100%">
    <div class="card-body">
      <h6 class="card-title"><iconify-icon icon="mdi:google-maps" style="font-size: 22px;"></iconify-icon> Mapas y navegación</h6>


    </div>
  </div>

</a>

 <a class="nav-link l_item" href="#">
<div class="card" style="width:100%">
    <div class="card-body">
      <h6 class="card-title"><iconify-icon icon="ic:baseline-gps-fixed" style="font-size: 24px;"></iconify-icon> Rastreo gps</h6>

    

    </div>
  </div>

</a>


 <a class="nav-link l_item" href="#">
<div class="card" style="width:100%;">
    <div class="card-body">
      <h6 class="card-title"><iconify-icon icon="material-symbols:shopping-basket" style="font-size: 22px;"></iconify-icon> 
        
      Compras</h6>

    </div>
  </div>

</a>

 <a class="nav-link l_item" href="#">
<div class="card" style="width:100%;">
    <div class="card-body">
      <h6 class="card-title"><iconify-icon icon="solar:health-broken" style="font-size: 22px;"></iconify-icon> salud</h6>

    </div>
  </div>

</a>


 <a class="nav-link l_item" href="#">
<div class="card" style="width:100%;">
    <div class="card-body">
      <h6 class="card-title"><iconify-icon icon="ion:social-twitch-outline" style="font-size: 22px;"></iconify-icon> Social</h6>

    </div>
  </div>

</a>


 <a class="nav-link l_item" href="#">
<div class="card" style="width:100%;">
    <div class="card-body">
      <h6 class="card-title"><iconify-icon icon="ion:game-controller" style="font-size: 22px;"></iconify-icon> Arcade</h6>

    </div>
  </div>

</a>


</div>
</div>





</div>
</div>
 <div id="padre" style="text-align: center;">
     <div id="hijo" style="padding:10px">
       <span style="color:#fff;">&copy; <?php echo date("Y");?> Miappenlinea</span>
     </div>
   </div> 



</body>
</html>

 