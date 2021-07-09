<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="magicslideshow/magicslideshow.css"/>

<link rel="stylesheet" type="text/css" href="nav.css">



<style>



* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>


<!--NavBar -->
        
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="home.html">MusicPlanet</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sobre.html">Sobre Nos</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               DJ
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a href="mesas.php">Mesas de Mistura</a>
                  <a href="gd.php">Gira Discos</a>
                  <a href="controladoras.php">Controladoras</a>
                  <br>
                  <a href="headphones.php">Head Phones</a>
                  <a href="leitores.php">Leitores[XDJ & CDJ]</a>
              </div>
            </li>
             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Estudio
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a href="monitores.html">Monitores de Estudio</a><br>
                  <a href="samplers.html">Samplers & Efeitos</a>
                  <a href="sintetizadores.html">Sintetizadores</a>
                  <a href="teclados.html">Teclados</a>
                  <a href="controladores.html">Controladores MIDI</a>
              </div>
            </li>
             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Cursos
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                 <a href="beginner.html">Curso DJ Begginer</a>
                 <a href="master.html">Curso DJ Master</a>
                 <a href="produtor.html">Curso Produtor</a>
                 <a href="scratch.html">Curso Scratch</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
<!--NavBar fim -->


<br>

<div class="container">
    <div class="row">
      <div class="col-md-12"><h5 align="center"><b>Controladoras</b></h5></div>
      <br>
      <br>
  </div>
      <div class="row">
        
           
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/ddj400.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Pioneer</a>
                </h4>
                 <h6>DDJ 400</h6>
                <h5>260.00€</h5>
              <!--  <p class="card-text"><b>Controlador profissional de 2 canais para DJ<br><br>
Placa de som integrada<br><br>
16 pads tateis retro-iluminados / Efeitos integrados<br></b></p>
-->
              </div>
              <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">
                
              </div>
            </div>
          </div>
        




         <div class="col-md-3 col-sm-6">
            

              
           <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/imp200.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Hercules </a>
                </h4>
                 <h6>Impulse 200</h6>
                <h5>110.00€</h5>

              <!--  <p class="card-text"><b>Controlador de 2 canais para DJ<br><br>
Jog wheel: detecao tactil para o modo Scratch<br><br>
4 pads: ative 4 modos (Hot Cue, Roll, Fx, Sampler)<br></b></p>
-->
              </div>
              <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">

          
              </div>
            </div>
        </div>  





 <div class="col-md-3 col-sm-6">
            

              
          <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/s2.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Native Instruments</a>
                </h4>
                 <h6>Traktor Kontrol S2 MKII</h6>
                <h5>265.00€</h5>
             <!--   <p class="card-text"><b>Controlador DJ Profissonal 2 canais<br><br>
Alimentação via USB<br><br>
Inclui TRAKTOR PRO 3</b></p>-->
              </div>
              <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">
             
                
              </div>
            </div>
        </div>  




 <div class="col-md-3 col-sm-6">
            

             <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/sb3.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Pioneer </a>
                </h4>
                 <h6>DDJ SB3</h6>
                <h5>237.0€</h5>
              <!--  <p class="card-text"><b>Controlador profissional de 2 canais para DJ<br><br>
Placa de som integrada<br><br>
16 pads táteis retro-iluminados / Efeitos integrados<br><br></b></p>-->
              </div>
               <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">
                
              </div>
              
            </div>
        </div>    




 <div class="col-md-3 col-sm-6">
            

           <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/ddj800.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Pioneer </a>
                </h4>
                 <h6>DDJ 800</h6>
                <h5>738.0€</h5>
              <!--  <p class="card-text"><b>Controlador profissional de 2 canais para DJ<br><br>
16 pads retro-iluminados / Efeitos integrados e avançados<br><br>
Jog-Wheels optimizadas de tamanho normal com visor no centro / Conexão para microfone<br><br></b></p>-->
              </div>
               <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">

                
              </div>
            </div>
        </div>  



<div class="col-md-3 col-sm-6">
            

    <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/ddj1000.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Pioneer </a>
                </h4>
                 <h6>DDJ 1000</h6>
                <h5>1129.0€</h5>
               <!-- <p class="card-text"><b>Controlador profissional e mixer de 4 canais para DJ<br><br>
Placa de som integrada<br><br>
16 pads retro-iluminados / Efeitos integrados e avançados<br><br></b></p>-->
              </div>
               <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">

                
              </div>
            </div>
        </div>  




<div class="col-md-3 col-sm-6">
            

              
           <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/s4.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Native Instruments </a>
                </h4>
                 <h6>Traktor Kontrol S4 MKIII</h6>
                <h5>730.0€</h5>
              <!--  <p class="card-text"><b>Controlador DJ Profissonal 4 canais<br><br>
Jog Wheels motorizadas c/idicador CUE points<br><br>
Interface aúdio de alta qualidade 24-bit / 96-kHz<br><br></b></p>-->
              </div>
               <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">

                
              </div>
            </div>
        </div>  


<div class="col-md-3 col-sm-6">
            

           <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/djgo.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Numark </a>
                </h4>
                 <h6>DJ2GO 2</h6>
                <h5>70.0€</h5>
              <!--  <p class="card-text"><b>8 pads multi-função<br><br>
2 faders para regulação de pitch<br><br>
Interface de audio<br><br></b></p>-->
              </div>
               <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">
                
              </div>
            </div>
        </div>  




<div class="col-md-3 col-sm-6">
            

            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/prime4.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Denon </a>
                </h4>
                 <h6>Prime 4</h6>
                <h5>1745.0€</h5>
               <!-- <p class="card-text"><b>Controlador 4 decks stand alone<br><br>
Ecrã 10" multi touch<br><br>
Jog wheels 6" com display integrado<br><br></b></p>-->
              </div>
               <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">
                
              </div>
            </div>
        </div>  





<div class="col-md-3 col-sm-6">
            

            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/mixtrack.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Numark  </a>
                </h4>
                 <h6>MixTrack Platinium FX</h6>
                <h5>285.0€</h5>
              <!--  <p class="card-text"><b>Controlador semi-profissional de 2 decks para DJ<br><br>
Placa de som integrada<br><br>
16 pads táteis retro-iluminados / Efeitos integrados<br><br></b></p>-->
              </div>
               <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">




</div>
    </div>

</div>


<div class="col-md-3 col-sm-6">
            

            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/raneone.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Rane </a>
                </h4>
                 <h6>One</h6>
                <h5>1489.0€</h5>
              <!--  <p class="card-text"><b>Controlador de 2 decks para DJ<br><br>
Platters de 7.2 polegadas motorizadas com discos<br><br>
Compatível com Serato Scratch Bank<br><br></b></p>-->
              </div>
               <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">




</div>
    </div>

</div>




<div class="col-md-3 col-sm-6">
            

             <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/buddy2.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Reloop </a>
                </h4>
                 <h6>Buddy</h6>
                <h5>219.0€</h5>
              <!--  <p class="card-text"><b>Controlador de 2 decks altamente compacto<br><br>
Compatível com iOS/iPADOS/ANDROID/MAC & PC<br><br>
Oito pads desempenho codificados por cores RGB<br><br></b></p>-->
              </div>
               <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">



</div>
    </div>

</div>



<div class="col-md-3 col-sm-6">
            

          <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/flx6.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Pioneer </a>
                </h4>
                 <h6>DDJ-FLX6</h6>
                <h5>599.00€</h5>
              <!--  <p class="card-text"><b>Controlador DJ de 4 canais<br><br>
Nova função Merge FX<br><br>
Interface Aúdio USB 24 bit/44,1 kHz<br><br></b></p>-->
              </div>
               <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">




</div>
    </div>

</div>

<div class="col-md-3 col-sm-6">
            

            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/imp500.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Hercules </a>
                </h4>
                 <h6>Impulse 500</h6>
                <h5>250.00€</h5>
             <!--   <p class="card-text"><b>Controlador DJ 2 canais <br><br>
SAIDAS 2x jack 6,35 mm + 2 x RCA; Dois conectores para auscultadores<br><br>
Pads Full RGB</b></p>-->
              </div>
               <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">





</div>
    </div>

</div>



<div class="col-md-3 col-sm-6">
            

           
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/k2.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Allen & Heath </a>
                </h4>
                 <h6>XONE:K2</h6>
                <h5>235.00€</h5>
              <!--  <p class="card-text"><b>Controlador MIDI USB <br><br>
Interface Áudio de 4 canais<br><br>
Ideal p/ Traktor ou Ableton Live</b></p>-->
              </div>
               <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">




</div>
    </div>

</div>

<div class="col-md-3 col-sm-6">
            

           <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/x1mk2.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Native Instruments </a>
                </h4>
                 <h6>Traktor Kontrol X1 Mk2</h6>
                <h5>175.00€</h5>
               <!-- <p class="card-text"><b>Controlador para software Traktor <br><br>
Controla 2 decks e 2 unidades de FX<br><br>
LED RGB para identificar loops, cues, etc.</b></p>-->
              </div>
               <a href="{{route('')}}" target="blank" class="btn btn-primary">Saber Mais</a>
              <div class="card-footer">





</div>
    </div>

</div>








































<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="magicslideshow/magicslideshow.js" type="text/javascript"></script>
</body>
</html>