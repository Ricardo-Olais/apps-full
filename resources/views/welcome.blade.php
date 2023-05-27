@extends('layouts.app')

@section('content')

<script async src="https://js.stripe.com/v3/buy-button.js"></script>

<style type="text/css">
	 body{
        //background-image: url("");
       // background-image: url("{{ URL::to('/') }}/img/fondo_juegos.PNG");
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


<!--div class="card" style="width:350px;margin-top: 5px;height: 600px;opacity: .9;">
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
  </div-->

  <div class="container-fluid" style="margin-top:10px;">
    <center>
   

    <div class="row">
      <div class="col-sm-12" style="height:700px; overflow: scroll;border-radius: 10px;overflow-x: hidden;background-color: #fff;opacity: .9;color: #000;"  >

     <table class="table">
        <thead>
          <tr>
            <th>Nombre de juego</th>
            <th>Descargar</th>
         
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><iconify-icon icon="twemoji:video-game" style="font-size: 20px;color: orange;"></iconify-icon> 20 MIL JUEGOS.apk</td>
            <td>

              <a href="{{ URL::to('/') }}/aplicaciones/juegos/20 MIL JUEGOS.apk"><iconify-icon icon="ic:baseline-download" style="font-size: 30px;color: orange;"></iconify-icon></a>

            </td>
            
          </tr>
           <tr>
            <td><iconify-icon icon="uiw:file-pdf" style="font-size: 20px;color: orange;"></iconify-icon> INSTRUCCIONES PARA LOS 20 MIL JUEGOS.pdf</td>
            <td>
              <a href="{{ URL::to('/') }}/aplicaciones/juegos/INSTRUCCIONES PARA LOS 20 MIL JUEGOS.pdf"><iconify-icon icon="ic:baseline-download" style="font-size: 30px;color: orange;"></iconify-icon></a></td>
            
          </tr>

          
          <tr>
            <td><iconify-icon icon="twemoji:video-game" style="font-size: 20px;color: orange;"></iconify-icon> Call of Duty®_ Warzone.xapk</td>
           <td>
            <a href="{{ URL::to('/') }}/aplicaciones/juegos/Call of Duty®_ Warzone.apk"><iconify-icon icon="ic:baseline-download" style="font-size: 30px;color: orange;"></iconify-icon></a>

          </td>
          </tr>
          <tr>
            <td><iconify-icon icon="ant-design:file-zip-twotone" style="font-size: 20px;color: orange;"></iconify-icon>EMULADOR NEOGEO PC.zip</td>
            <td>

             <a href="{{ URL::to('/') }}/aplicaciones/juegos/EMULADOR NEOGEO PC.zip"> <iconify-icon icon="ic:baseline-download" style="font-size: 30px;color: orange;"></iconify-icon></a>

            </td>
           
          </tr>

          <tr>
            <td><iconify-icon icon="twemoji:video-game" style="font-size: 20px;color: orange;"></iconify-icon> FIFA.xapk</td>
            <td>

            <a href="{{ URL::to('/') }}/aplicaciones/juegos/FIFA.apk">  <iconify-icon icon="ic:baseline-download" style="font-size: 30px;color: orange;"></iconify-icon></a>

            </td>

          </tr>

          <tr>
            <td><iconify-icon icon="twemoji:video-game" style="font-size: 20px;color: orange;"></iconify-icon> GTA San Andreas.apk</td>
            <td>
           <a href="{{ URL::to('/') }}/aplicaciones/juegos/GTA San Andreas.apk"><iconify-icon icon="ic:baseline-download" style="font-size: 30px;color: orange;"></iconify-icon></a>

            </td>
          </tr>
          <tr>
            <td><iconify-icon icon="twemoji:video-game" style="font-size: 20px;color: orange;"></iconify-icon> JUEGOS PS2, WII Y MAS.apk</td>
            <td>

            <a href="{{ URL::to('/') }}/aplicaciones/juegos/JUEGOS PS2, WII Y MAS.apk"><iconify-icon icon="ic:baseline-download" style="font-size: 30px;color: orange;"></iconify-icon></a>

            </td>
          </tr>

          <tr>
            <td><iconify-icon icon="twemoji:video-game" style="font-size: 20px;color: orange;"></iconify-icon> Marvel vs Capcom_ Clash of Super Heroes.apk</td>
            <td>

           <a href="{{ URL::to('/') }}/aplicaciones/juegos/Marvel vs Capcom_ Clash of Super Heroes.apk">   <iconify-icon icon="ic:baseline-download" style="font-size: 30px;color: orange;"></iconify-icon></a>

            </td>
          </tr>

          <tr>
            <td><iconify-icon icon="twemoji:video-game" style="font-size: 20px;color: orange;"></iconify-icon> Kof 98 Fighter Arcade.apk</td>
            <td>

            <a href="{{ URL::to('/') }}/aplicaciones/juegos/Kof 98 Fighter Arcade.apk"> <iconify-icon icon="ic:baseline-download" style="font-size: 30px;color: orange;"></iconify-icon></a>

            </td>
          </tr>

          <tr>
            <td><iconify-icon icon="twemoji:video-game" style="font-size: 20px;color: orange;"></iconify-icon> Metal Skug Pack.apk</td>
            <td>

            <a href="{{ URL::to('/') }}/aplicaciones/juegos/Metal Skug Pack.apk"> <iconify-icon icon="ic:baseline-download" style="font-size: 30px;color: orange;"></iconify-icon></a>

            </td>
          </tr>

          <tr>
            <td><iconify-icon icon="twemoji:video-game" style="font-size: 20px;color: orange;"></iconify-icon> KOF 2002 RETRO GAME.apk</td>
            <td>

            <a href="{{ URL::to('/') }}/aplicaciones/juegos/KOF 2002 RETRO GAME.apk"> <iconify-icon icon="ic:baseline-download" style="font-size: 30px;color: orange;"></iconify-icon></a>

            </td>
          </tr>

          <tr>
            <td><iconify-icon icon="twemoji:video-game" style="font-size: 20px;color: orange;"></iconify-icon> Minecraft-1.19.73.02.apk</td>
            <td>

            <a href="{{ URL::to('/') }}/aplicaciones/juegos/Minecraft-1.19.73.02.apk">  <iconify-icon icon="ic:baseline-download" style="font-size: 30px;color: orange;"></iconify-icon></a>

            </td>
          </tr>

          <tr>
            <td><iconify-icon icon="twemoji:video-game" style="font-size: 20px;color: orange;"></iconify-icon> Roblox.xapk</td>
            <td>

          <a href="{{ URL::to('/') }}/aplicaciones/juegos/Roblox.apk">   <iconify-icon icon="ic:baseline-download" style="font-size: 30px;color: orange;"></iconify-icon></a>

            </td>
          </tr>

          <tr>
            <td><iconify-icon icon="twemoji:video-game" style="font-size: 20px;color: orange;"></iconify-icon> Super Mario Run.apk</td>
            <td>

            <a href="{{ URL::to('/') }}/aplicaciones/juegos/Super Mario Run.apk">   <iconify-icon icon="ic:baseline-download" style="font-size: 30px;color: orange;"></iconify-icon></a>

            </td>
          </tr>

           <tr>
            <td><iconify-icon icon="fa:youtube" style="font-size: 20px;color: orange;"></iconify-icon> Youtube Premium sin comerciales</td>
            <td>

            <a href="{{ URL::to('/') }}/aplicaciones/juegos/youtube-stable-revanced-extended-v18.15.40-all.apk">  <iconify-icon icon="ic:baseline-download" style="font-size: 30px;color: orange;"></iconify-icon></a>

            </td>
          </tr>

          <tr>
            <td><iconify-icon icon="arcticons:apk-explorer-and-editor-alt" style="font-size: 20px;color: orange;"></iconify-icon> Micro G</td>
            <td>

           <a href="{{ URL::to('/') }}/aplicaciones/juegos/microg.apk">   <iconify-icon icon="ic:baseline-download" style="font-size: 30px;color: orange;"></iconify-icon></a>

            </td>
          </tr>

            <tr>
            <td><iconify-icon icon="uiw:file-pdf" style="font-size: 20px;color: orange;"></iconify-icon> INSTRUCCIONES PARA YOUTUBE.pdf</td>
            <td><iconify-icon icon="ic:baseline-download" style="font-size: 30px;color: orange;"></iconify-icon></td>
            
          </tr>
        </tbody>
      </table>
</div>
</div>
</div>


@endsection

 