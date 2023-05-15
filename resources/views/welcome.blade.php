@extends('layouts.app')

@section('content')

<script async src="https://js.stripe.com/v3/buy-button.js"></script>

<style type="text/css">
	 body{
        //background-image: url("");
        background-image: url("{{ URL::to('/') }}/img/fondo3_welcome.gif");
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


	    @font-face {
	    font-family:"nexa";
	    src:url("{{ URL::to('/') }}/css/font/NexaLight.otf") format("woff"),
	    url("{{ URL::to('/') }}/css/font/NexaLight.otf") format("opentype"),
	    url("{{ URL::to('/') }}/css/font/NexaLight.otf") format("truetype");
	    }

      p {
		 
		  font-size: 18px;
		  font-family: "nexa";
		}
</style>

<center>
<div class="card" style="width:350px;margin-top: 5px;height: 600px;opacity: .9;">
    <div class="card-body">
      <h6 class="card-title"></h6>
      <p style="text-align:justify;">Las mejores aplicaciones en un solo lugar...Podrás descargar apps full sin limitantes, sin anuncios.</p>

      <p style="text-align:justify;"><b style="color:Red;">Las apps de play store no son compatibles con tu dispositivo?</b><br><br>Olvídate de ese inconveniente, con miappenlínea podrás descargar las apps del momento con un solo clic.</p>

      <p style="text-align:justify;">Puedes realizar alguna donación si asi lo deseas, con tu apoyo podremos seguir manteniendo este servicio</p>

      <p style="text-align:justify;">Puedes subir archivos apk para compartirla con la comunidad.</p>

      <stripe-buy-button
                  buy-button-id="buy_btn_1My6UyA94PugK9gPoWX1R6XA"
                  publishable-key="pk_live_51My4BjA94PugK9gPVi42fynUV5Z1ytdMU1DAqHC6Zsie4QHefYZ2hirnb2QBw73Xpkr2kd4pr4sxcrR2eH9r0rM50095ZYctPa"
                >
      </stripe-buy-button>

    
     

 
        

    </div>
  </div>
 </center>


@endsection

 