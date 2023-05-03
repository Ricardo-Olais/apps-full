@extends('layouts.app')

@section('content')

<div class="card" style="width:100%;height: 25px !important;background-color: #000;">
 <center><strong style="color:#fff;">Entretenamiento</strong></center>
</div>


 @foreach($datos as $valor)


<div class="card nav-link l_item" style="width:350px;margin-top: 5px;margin-left: 10px;height: 300px;">
    <div class="card-body">
      <h6 class="card-title">{{ $valor['titulo'] }}</h6>

     <img src="{{ $valor['img'] }}" alt="icon" referrerpolicy="no-referrer" width="75" height="75">
      
      <p class="info">
        
        <span class="author">{{ $valor['autor'] }}</span><br>
        <span class="description">{{ $valor['descripcion'] }}</span>
     </p>
     <br>
     <p>{{ $valor['contenido'] }}</p>
<a href="{{ $valor['url'] }}" class="btn btn-primary" style="float:right;background-color: black;"><iconify-icon icon="ic:baseline-cloud-download" style="font-size: 20px;color: #fff;"></iconify-icon></a>

     

 
        

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