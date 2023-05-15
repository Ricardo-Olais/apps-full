@extends('layouts.app')

@section('content')

<script async src="https://js.stripe.com/v3/buy-button.js"></script>


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

    .card {
        /* Add shadows to create the "card" effect */
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
      }

      /* On mouse-over, add a deeper shadow */
      .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
      }

      .zoom{

     transition: 1.5ms ease;
     -moz-transition: 1.5s ease; /* Firefox */
     -webkit-transition: 1.5s ease; /* Chrome - Safari */
     -o-transition: 1.5s ease; /* Opera */
    }

    .zoom:hover{
    transform : scale(1.2);
    -moz-transform : scale(1.1); /* Firefox */
    -webkit-transform : scale(1.1); /* Chrome - Safari */
    -o-transform : scale(1.1); /* Opera */
    -ms-transform : scale(1.1); /* IE9 */ }

    ::-webkit-scrollbar {
      width: 20px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
      box-shadow: inset 0 0 5px grey; 
      border-radius: 10px;
    }
     
    /* Handle */
    ::-webkit-scrollbar-thumb {
      background:  #678aa0 ; 
      border-radius: 10px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
      background:  #9cadb6 ; 
    }
</style>


<script type="text/javascript">
  
  $(document).ready(function(){

      $("#buscar").click(function(){

          var valueFiltro=$("#filtro").val();
         // alert(valueFiltro);
         $("#loading").css("display","");
          
          window.location.replace("{{ URL::to('/') }}/juegos/"+valueFiltro);



      });

  });
</script>

<div class="card" style="width:100%;height: 25px !important;background-color:black;">
 <center><strong style="color:#fff;">Juegos</strong></center>
</div>



<center>
<div class="input-group mb-8" style="width: 80%;margin-top: 15px;">
  <!--stripe-buy-button
                  buy-button-id="buy_btn_1My6UyA94PugK9gPoWX1R6XA"
                  publishable-key="pk_live_51My4BjA94PugK9gPVi42fynUV5Z1ytdMU1DAqHC6Zsie4QHefYZ2hirnb2QBw73Xpkr2kd4pr4sxcrR2eH9r0rM50095ZYctPa"
                >
  </stripe-buy-button-->
  <br>
  <!--form name="filtra" id="filtra" method="GET" action=""-->
  <input type="text" class="form-control" placeholder="Buscar APK" aria-describedby="basic-addon2" name="filtro" id="filtro">
  <div class="input-group-append">
    <button type='submit' class="btn btn-dark" id="buscar"><iconify-icon icon="ic:outline-search" style="font-size: 24px;color: #fff;"></iconify-icon></button>



  </div>

  <!--/form-->
</div>
</center>
<br>

<center>
<img src="{{ URL::to('/') }}/img/loading.gif" id='loading' style="position:absolute;z-index: 2000;text-align: inherit;display: none;">
</center>
 @if($variable !=false)
<center><span style="color:#fff;">Resultados de la búsqueda: {{$variable}}</span></center>
  @endif

 @foreach($datos as $valor)


<div class="card nav-link l_item" style="width:350px;margin-top: 5px;margin-left: 20px;height: 350px;">
    <div class="card-body">
      <h6 class="card-title">{{ $valor['titulo'] }}</h6>

     <img src="{{ URL::to('/') }}/{{ $valor['img'] }}" alt="icon" referrerpolicy="no-referrer" width="75" height="75" class="zoom">
      
      <p class="info">
        
        <span class="author">{{ $valor['autor'] }}</span><br>
        <span class="description">{{ $valor['descripcion'] }}</span>
     </p>
     <br>
     <p style="text-align: justify;">{{ $valor['contenido'] }}</p>

<a href="{{ URL::to('/') }}/{{ $valor['url'] }}" class="btn btn-primary" style="float:right;background-color: black;"><iconify-icon icon="ic:baseline-cloud-download" style="font-size: 20px;color: #fff;"></iconify-icon></a>
  
  @if($variable !=false)

      <a href="{{ URL::to('/') }}/entretenimiento" class="btn btn-primary" style="float:right;background-color: black;color:#fff;">Regresar <iconify-icon icon="humbleicons:arrow-go-back" style="font-size: 20px;color: #fff;"></iconify-icon></a>
  


  @endif


     

 
        

    </div>
  </div>


 @endforeach



<!--div class="card nav-link l_item" style="width:350px;margin-top: 5px;margin-left: 20px;height: 280px;">
    <div class="card-body">
      <h6 class="card-title">ReVanced Installer</h6>

     <img src="https://play-lh.googleusercontent.com/BmksECSxrrp2FaLC_41Zmsic9CCrQlWlJ4biuiMT84-pTssSqbLHKmRqMdqAsIKI2A=s75-rw" data-src="https://play-lh.googleusercontent.com/BmksECSxrrp2FaLC_41Zmsic9CCrQlWlJ4biuiMT84-pTssSqbLHKmRqMdqAsIKI2A=s75-rw" class="lazyloaded" alt="icon" referrerpolicy="no-referrer">
      
      <p class="info">
        
        <span class="author">Seeun Dev · Herramientas</span><br>
        <span class="description"><span>1 mil+</span> <span>N/A ★</span> <span class="ltr">8 MB</span></span>
     </p>
     <br>
     <p>Reproductor sin comerciales equivalente a youtube premium.</p>

    <a href="aplicaciones/youtube/ReVanced-YouTube-v18.03.36-cli_v2.20.0-patches_v2.158.0.apk" class="btn btn-primary" style="float:right;"><iconify-icon icon="ic:baseline-cloud-download" style="font-size: 20px;color: #fff;"></iconify-icon></a>

    </div>
  </div>
</div>




<div class="card nav-link l_item" style="width:350px;margin-top: 5px;margin-left: 20px;height: 280px;">
    <div class="card-body">
      <h6 class="card-title">VancedMicroG</h6>

    <img src="https://play-lh.googleusercontent.com/rZ6RT3DgJygMhf6IhDNBw0yDpTG-iULmSA3brhPmLaIGiT-TycqGxhdlMhpogakB06c=s75-rw" data-src="https://play-lh.googleusercontent.com/rZ6RT3DgJygMhf6IhDNBw0yDpTG-iULmSA3brhPmLaIGiT-TycqGxhdlMhpogakB06c=s75-rw" class="lazyloaded" alt="icon" referrerpolicy="no-referrer">
      
      <p class="info">
        
        <span class="author">Seeun Dev · Herramientas</span><br>
        <span class="description"><span>5 M+</span> <span>3,8 ★</span> <span class="ltr">12.20 MB</span></span>
     </p>
      <br>
      <p>Característica para instalar youtube premium y ReVanced</p>

      <a href="aplicaciones/youtube/VancedMicroG-v0.2.24.220220-220220001.apk" class="btn btn-primary" style="float:right;"><iconify-icon icon="ic:baseline-cloud-download" style="font-size: 20px;color: #fff;"></iconify-icon></a>

    </div>
  </div>
</div>


 <!--a class="nav-link l_item" href="#">
<div class="card" style="width:350px;">
    <div class="card-body">
      <h6 class="card-title">Netflix</h6>

    <img src="https://play-lh.googleusercontent.com/TBRwjS_qfJCSj1m7zZB93FnpJM5fSpMA_wUlFDLxWAb45T9RmwBvQd5cWR5viJJOhkI=s75-rw" data-src="https://play-lh.googleusercontent.com/TBRwjS_qfJCSj1m7zZB93FnpJM5fSpMA_wUlFDLxWAb45T9RmwBvQd5cWR5viJJOhkI=s75-rw" class="lazyloaded" alt="icon" referrerpolicy="no-referrer">
      
      <p class="info">
        
        <span class="author">Netflix, Inc. · Entretenimiento</span><br>
        <span class="description"><span>1 milM+</span> <span>4,4 ★</span> <span class="ltr">112 MB</span></span>
     </p>

    </div>
  </div>
</div>
</a>


 <a class="nav-link l_item" href="#">
<div class="card" style="width:350px;">
    <div class="card-body">
      <h6 class="card-title">Disney Plus</h6>

    <img src="https://play-lh.googleusercontent.com/xoGGYH2LgLibLDBoxMg-ZE16b-RNfITw_OgXBWRAPin2FZY4FGB9QKBYApR-0rSCkQ=s75-rw" data-src="https://play-lh.googleusercontent.com/xoGGYH2LgLibLDBoxMg-ZE16b-RNfITw_OgXBWRAPin2FZY4FGB9QKBYApR-0rSCkQ=s75-rw" class="lazyloaded" alt="icon" referrerpolicy="no-referrer">
      
      <p class="info">
        
        <span class="author">Disney · Entretenimiento</span><br>
        <span class="description"><span>100 M+</span> <span>4,4 ★</span> <span class="ltr">33 MB</span></span>
     </p>

    </div>
  </div>
</div>
</a>

 <a class="nav-link l_item" href="#">
<div class="card" style="width:350px;">
    <div class="card-body">
      <h6 class="card-title">Vix</h6>

   <img src="https://play-lh.googleusercontent.com/s2G05IFOkSB2E6w_lBAgVOJT8rYVSIX7cT5dRR7HjWhUM0smh606nQ3uqWM8sLPk7BI=s75-rw" data-src="https://play-lh.googleusercontent.com/s2G05IFOkSB2E6w_lBAgVOJT8rYVSIX7cT5dRR7HjWhUM0smh606nQ3uqWM8sLPk7BI=s75-rw" class="lazyloaded" alt="icon" referrerpolicy="no-referrer">
      
      <p class="info">
        
        <span class="author">TelevisaUnivision Interactive, Inc. · Entretenimiento</span><br>
        <span class="description"><span>10 M+</span> <span>3,9 ★</span> <span class="ltr">31 MB</span></span>
     </p>

    </div>
  </div>
</div>
</a>

 <a class="nav-link l_item" href="#">
<div class="card" style="width:350px;">
    <div class="card-body">
      <h6 class="card-title">Paramount+</h6>

   <img src="https://play-lh.googleusercontent.com/uGA0LQgKgpxcG8Dz8haVYKs1KZTUnPu5hGhcGmXyaVXFLS-yn1LLnECUG6lb4aZVMw=s75-rw" data-src="https://play-lh.googleusercontent.com/uGA0LQgKgpxcG8Dz8haVYKs1KZTUnPu5hGhcGmXyaVXFLS-yn1LLnECUG6lb4aZVMw=s75-rw" class="lazyloaded" alt="icon" referrerpolicy="no-referrer">
      
      <p class="info">
        
        <span class="author">ViacomCBS Streaming · Entretenimiento</span><br>
        <span class="description"><span>10 M+</span> <span>4,2 ★</span> <span class="ltr">40 MB</span></span>
     </p>

    </div>
  </div>
</div>
</a>

 <a class="nav-link l_item" href="#">
<div class="card" style="width:350px;">
    <div class="card-body">
      <h6 class="card-title">Film-App-4.3.9</h6>

   <img src="img/film-app-apk.png" width="75" height="75" class="lazyloaded" alt="icon" referrerpolicy="no-referrer">
      
      <p class="info">
        
        <span class="author">Film</span><br>
        <span class="description"><span>3 M+</span> <span>4,5 ★</span> <span class="ltr">6.49 MB</span></span>
     </p>

    </div>
  </div>
</div>
</a>


 <a class="nav-link l_item" href="#">
<div class="card" style="width:350px;">
    <div class="card-body">
      <h6 class="card-title">Chromecast</h6>


         <img src="https://play-lh.googleusercontent.com/Kd9NIuzYgDvL40q_lMVUH1vSGXwHsD3G8Un2uDw8K3g0jBuXbUkJ1JSLoJIHjSDJqA=s75-rw" data-src="https://play-lh.googleusercontent.com/Kd9NIuzYgDvL40q_lMVUH1vSGXwHsD3G8Un2uDw8K3g0jBuXbUkJ1JSLoJIHjSDJqA=s75-rw" class="lazyloaded" alt="icon" referrerpolicy="no-referrer">


      <p class="info">
        
        <span class="author">Google LLC · Herramientas</span><br>
        <span class="description"><span>3 M+</span> <span>4,5 ★</span> <span class="ltr">6.49 MB</span></span>
     </p>

    </div>
  </div>
</div>
</a>

 <a class="nav-link l_item" href="#">
<div class="card" style="width:350px;">
    <div class="card-body">
      <h6 class="card-title">Web Video Castt</h6>
      <img src="https://play-lh.googleusercontent.com/4xUYWX2Z6LhCeyxjxfPl4d9v8DNGXiXJvR4gHcgTR3YCVoarhhGdfroTp1QvYI8pIQ=s75-rw" data-src="https://play-lh.googleusercontent.com/4xUYWX2Z6LhCeyxjxfPl4d9v8DNGXiXJvR4gHcgTR3YCVoarhhGdfroTp1QvYI8pIQ=s75-rw" class="lazyloaded" alt="icon" referrerpolicy="no-referrer">
      <p class="info">
        
        <span class="author">InstantBits Inc · Reproductores y editores de vídeo</span><br>
       <span class="description"><span>50 M+</span> <span>4,6 ★</span> <span class="ltr">46 MB</span></span>
     </p>

    </div>
  </div>
</div>
</a-->

@endsection